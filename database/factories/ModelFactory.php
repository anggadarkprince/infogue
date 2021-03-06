<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Infogue\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Infogue\Feedback::class, function (Faker\Generator $faker) {
    $labels = ['general', 'important', 'archived'];

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->paragraph(),
        'label' => $labels[array_rand($labels, 1)]
    ];
});

$factory->define(Infogue\Visitor::class, function (Faker\Generator $faker) {
    return [
        'date' => $faker->dateTimeBetween('-2 months', 'now')->format('Y-m-d'),
        'hit' => rand(0, 1000),
        'unique' => rand(0, 100)
    ];
});

$factory->define(Infogue\Contributor::class, function (Faker\Generator $faker) {
    $vendors = ['web', 'facebook', 'twitter'];

    $statuses = ['pending', 'activated', 'suspended'];

    $genders = ['male', 'female', 'other'];

    return [
        'token' => uniqid(),
        'api_token' => str_random(60),
        'vendor' => $vendors[array_rand($vendors, 1)],
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'status' => $statuses[array_rand($statuses, 1)],
        'gender' => $genders[array_rand($genders, 1)],
        'avatar' => 'avatar_' . rand(1, 19) . '.jpg',
        'cover' => 'cover_' . rand(1, 5) . '.jpg',
        'birthday' => $faker->date('Y-m-d', '2000-01-01'),
        'about' => $faker->paragraph(),
        'location' => $faker->city . ', ' . $faker->country,
        'contact' => $faker->phoneNumber,
        'facebook' => 'https://www.facebook.com/' . $faker->userName,
        'twitter' => 'https://www.twitter.com/' . $faker->userName,
        'googleplus' => 'https://plus.google.com/+' . $faker->userName,
        'instagram' => 'https://www.instagram.com/' . $faker->userName,
        'mobile_notification' => rand(0, 1),
        'email_subscription' => rand(0, 1),
        'email_message' => rand(0, 1),
        'email_follow' => rand(0, 1),
        'email_feed' => rand(0, 1),
        'balance' => rand(0, 200000),
        'bank_id' => rand(1, 80),
        'account_name' => $faker->name,
        'account_number' => $faker->creditCardNumber,
    ];
});

$factory->define(Infogue\Image::class, function () {
    return [
        'contributor_id' => rand(1, 100),
        'source' => 'featured_' . rand(1, 10) . '.jpg',
    ];
});

$factory->define(Infogue\Activity::class, function (Faker\Generator $faker) {
    return [
        'contributor_id' => rand(1, 100),
        'activity' => $faker->sentence()
    ];
});

$factory->define(Infogue\Follower::class, function () {
    return [
        'contributor_id' => rand(1, 100),
        'following' => rand(1, 100)
    ];
});

$factory->define(Infogue\Message::class, function () {
    return [];
});

$factory->define(Infogue\Conversation::class, function (Faker\Generator $faker) {
    return [
        'message_id' => rand(1, 100),
        'sender' => rand(1, 100),
        'receiver' => rand(1, 100),
        'message' => $faker->sentence()
    ];
});

$factory->define(Infogue\Attachment::class, function () {
    return [
        'conversation_id' => rand(1, 300),
        'file' => 'attachment_' . rand(1, 5) . '.zip'
    ];
});

$factory->define(Infogue\Article::class, function (Faker\Generator $faker) {
    $title = $faker->sentence(8);

    $content = $faker->paragraphs(7);

    $wrapped = array_map(
        function ($element) {
            return "<p>{$element}</p>";
        },
        $content
    );

    $types = ['standard', 'gallery', 'video'];

    $statuses = ['pending', 'draft', 'published', 'reject'];

    $rankings = ['general', 'headline', 'trending'];

    return [
        'contributor_id' => rand(1, 100),
        'subcategory_id' => rand(1, 130),
        'title' => $title,
        'slug' => str_slug($title),
        'featured' => 'featured_' . rand(1, 28) . '.jpg',
        'content' => implode(' ', $wrapped),
        'content_update' => '',
        'excerpt' => (rand(0, 1)) ? '' : $faker->paragraph,
        'type' => $types[array_rand($types, 1)],
        'status' => $statuses[array_rand($statuses, 1)],
        'state' => $rankings[array_rand($rankings, 1)],
        'reward' => rand(0, 20000),
        'view' => rand(0, 2000)
    ];
});

$factory->define(Infogue\Comment::class, function (\Faker\Generator $faker) {
    return [
        'article_id' => rand(1, 1000),
        'contributor_id' => rand(1, 103),
        'comment' => implode(" ", $faker->sentences())
    ];
});

$factory->define(Infogue\Rating::class, function (Faker\Generator $faker) {
    return [
        'article_id' => rand(1, 1000),
        'ip' => $faker->ipv4,
        'rate' => rand(1, 5)
    ];
});

$factory->define(Infogue\Tag::class, function (Faker\Generator $faker) {
    return [
        'tag' => $faker->word,
    ];
});

$factory->define(Infogue\ArticleTag::class, function () {
    return [
        'article_id' => rand(1, 1000),
        'tag_id' => rand(1, 20)
    ];
});

$factory->define(Infogue\Subscriber::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email
    ];
});

$factory->define(Infogue\Transaction::class, function (Faker\Generator $faker) {
    $statuses = ['pending', 'proceed', 'cancel', 'success'];
    return [
        'contributor_id' => rand(1, 100),
        'type' => (rand(0, 1) == 1) ? 'withdrawal' : 'reward',
        'description' => $faker->paragraph,
        'amount' => rand(20000, 50000),
        'status' => $statuses[array_rand($statuses, 1)]
    ];
});