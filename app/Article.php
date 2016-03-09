<?php

namespace Infogue;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $hidden = ['deleted_at'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('latest', function(Builder $builder) {
            $builder->orderBy('articles.created_at', 'desc');
        });
    }

    public function scopePublished($query)
    {
        return $query->where('articles.status', 'published');
    }

    public function contributor()
    {
        return $this->belongsTo('Infogue\Contributor');
    }

    public function subcategory()
    {
        return $this->belongsTo('Infogue\Subcategory');
    }

    public function rating()
    {
        return $this->hasOne('Infogue\Rating')
            ->selectRaw('IFNULL(ROUND(AVG(ratings.rate)), 0) AS total_rating')
            ->groupBy('article_id');
    }

    public function ratings()
    {
        return $this->hasMany('Infogue\Rating');
    }

    public function tags()
    {
        return $this->belongsToMany('Infogue\Tag', 'article_tags')->withTimestamps();
    }

    public function related($id)
    {
        $tags = $this->published()
            ->join('article_tags', 'articles.id', '=', 'article_id')
            ->join('tags', 'tags.id', '=', 'tag_id')
            ->where('articles.id', $id)
            ->pluck('tags.id')->toArray();

        $related = $this->published()
            ->select('articles.id', 'title', 'slug', 'content', 'view', 'featured', 'articles.created_at')
            ->join('article_tags', 'articles.id', '=', 'article_id')
            ->join('tags', 'tags.id', '=', 'tag_id')
            ->groupBy('articles.id')
            ->whereIn('tags.id', $tags)
            ->where('articles.id', '!=', $id)
            ->take(5)
            ->get();

        return $related;
    }

    public function mostPopular($take = 10)
    {
        $popular = $this->preArticleQuery()->published()
            ->where('articles.created_at', '>', Carbon::now()->addMonth(-3))
            ->orderBy('view', 'desc')
            ->take($take)
            ->get();

        return $this->preArticleModifier($popular);
    }

    public function mostRanked()
    {
        $ranking = $this->published()
            ->select(DB::raw('articles.id, slug, title, CAST(SUM(ratings.rate) AS UNSIGNED) AS total_rating'))
            ->where('articles.created_at', '>', Carbon::now()->addYear(-1))
            ->leftJoin('ratings', 'articles.id', '=', 'ratings.article_id')
            ->groupBy('articles.id')
            ->orderBy('total_rating', 'desc')
            ->take(10)
            ->get();

        return $ranking;
    }

    public function headline($is_featured = true)
    {
        if($is_featured){
            $headline = $this->published()->where('state', 'headline')->take(4)->get();
        }
        else{
            $articles = $this->preArticleQuery()->published()->where('state', 'headline')->paginate(9);

            $headline = $this->preArticleModifier($articles);
        }

        return $headline;
    }

    public function trending($is_featured = true)
    {
        if($is_featured){
            $trending = $this->published()->where('state', 'trending')->take(4)->get();
        }
        else{
            $articles = $this->preArticleQuery()->published()->where('state', 'trending')->paginate(9);

            $trending = $this->preArticleModifier($articles);
        }

        return $trending;
    }

    public function latest($is_featured = true)
    {
        if($is_featured){
            $trending = $this->select('id')
                ->published()
                ->where('state', 'trending')
                ->take(4)
                ->pluck('id')->toArray();

            $latest = $this->published()->whereNotIn('id', $trending)->take(4)->get();
        }
        else{
            $articles = $this->preArticleQuery()->published()->paginate(9);

            $latest = $this->preArticleModifier($articles);
        }

        return $latest;
    }

    public function random()
    {
        $articles = $this->preArticleQuery()->orderByRaw("RAND()")->published()->paginate(9);

        $random = $this->preArticleModifier($articles);

        return $random;
    }

    public function tag($tag)
    {
        $articles = $this->preArticleQuery()->published()
            ->join('article_tags', 'articles.id', '=', 'article_tags.article_id')
            ->join('tags', 'tags.id', '=', 'tag_id')
            ->where('tags.tag', 'like', $tag)
            ->paginate(9);

        return $this->preArticleModifier($articles);
    }

    public function archive($data, $by, $sort, $contributor = null)
    {
        $archive = $this->preArticleQuery();

        if($contributor == null){
            $archive->published();
        }
        else{
            $archive->where('contributor_id', $contributor);
        }

        if($data == 'trending'){
            $archive->where('state', 'trending');
        }
        else if($data == 'popular'){
            $archive->where('articles.created_at', '>', Carbon::now()->addMonth(-3))->orderBy('view', 'desc');
        }
        else if($data == 'headline'){
            $archive->where('state', 'headline');
        }
        else if($data != 'all-data'){
            $archive->where('category', 'like', "%{$data}%");
        }

        if($sort == 'random'){
            $archive->orderByRaw("RAND()");
        }
        else{
            if($by == 'date'){
                $archive->orderBy('created_at', $sort);
            }
            else if($by == 'title'){
                $archive->orderBy('title', $sort);
            }
            else if($by == 'view'){
                $archive->orderBy('view', $sort);
            }
            else if($by == 'star'){
                $archive->orderBy('total_rating', $sort);
            }
        }

        return $this->preArticleModifier($archive->paginate(12));
    }

    public function retrieveArticle($data, $status, $by, $sort, $query = null)
    {
        $articles = $this->preArticleQuery();

        if($query != null && $query != ''){
            $articles
                ->where('title', 'like', "%{$query}%")
                ->orWhere('name', 'like', "%{$query}%")
                ->orWhere('category', 'like', "%{$query}%")
                ->orWhere('subcategory', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%");
        }

        if($status != 'all'){
            $articles->where('articles.status', $status);
        }

        if($data == 'trending'){
            $articles->where('state', 'trending');
        }
        else if($data == 'popular'){
            $articles->where('articles.created_at', '>', Carbon::now()->addMonth(-3))->orderBy('view', 'desc');
        }
        else if($data == 'headline'){
            $articles->where('state', 'headline');
        }
        else if($data != 'all'){
            $articles->where('category', 'like', "%{$data}%");
        }

        if($by == 'date'){
            $articles->orderBy('created_at', $sort);
        }
        else if($by == 'title'){
            $articles->orderBy('title', $sort);
        }
        else if($by == 'view'){
            $articles->orderBy('view', $sort);
        }
        else if($by == 'author'){
            $articles->orderBy('name', $sort);
        }
        else if($by == 'popularity'){
            $articles->orderBy('total_rating', $sort);
        }

        return $this->preArticleModifier($articles->paginate(10));
    }

    public function search($query, $take = 10)
    {
        $result = $this->preArticleQuery()->published()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('category', 'like', "%{$query}%")
            ->orWhere('subcategory', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->groupBy('articles.id')
            ->paginate($take);

        return $this->preArticleModifier($result);
    }

    public function preArticleQuery()
    {
        return $this->select(
                DB::raw('
                    articles.id,
                    slug,
                    title,
                    content,
                    content_update,
                    featured,
                    view,
                    articles.status AS status,
                    state,
                    contributor_id,
                    name,
                    username,
                    avatar,
                    CAST(IFNULL(ROUND(AVG(ratings.rate)), 0) AS UNSIGNED) AS total_rating,
                    subcategory_id,
                    subcategory,
                    category_id,
                    category,
                    articles.created_at'
                )
            )
            ->join('subcategories', 'subcategories.id', '=', 'subcategory_id')
            ->join('categories', 'categories.id', '=', 'category_id')
            ->join('contributors', 'contributors.id', '=', 'contributor_id')
            ->leftJoin('ratings', 'articles.id', '=', 'article_id')
            ->groupBy('articles.id');
    }

    public function preArticleModifier($articles)
    {
        foreach($articles as $article):

            $article->featured_ref = asset('images/featured/'.$article->featured);
            $article->article_ref = route('article.show', [$article->slug]);
            $article->contributor_ref = route('contributor.stream', [$article->username]);
            $article->avatar_ref = asset('images/contributors/'.$article->avatar);
            $article->category_ref = route('article.category', [str_slug($article->category)]);
            $article->subcategory_ref = route('article.subcategory', [str_slug($article->category), str_slug($article->username)]);
            $article->published_at = Carbon::parse($article->created_at)->format('d F Y');
            $article->content = str_limit(strip_tags($article->content), 160);

        endforeach;

        return $articles;
    }

    public function navigateArticle($id, $direction, $total = 1){
        if($direction == 'prev'){
            $article = $this->published()->where('id', '<', $id)->orderBy('id', 'desc')->take($total);
        }
        else{
            $article = $this->published()->where('id', '>', $id)->orderBy('id', 'asc')->take($total);
        }

        if($total > 1){
            $article = $article->get();
        }
        else{
            $article = $article->first();
        }

        return $article;
    }
}
