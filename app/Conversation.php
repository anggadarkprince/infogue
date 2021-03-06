<?php

namespace Infogue;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Conversation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['message_id', 'sender', 'receiver', 'message', 'is_available_sender', 'is_available_receiver'];

    /**
     * Many-to-one relationship, find out the conversation belong to receiver.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function receiver()
    {
        return $this->belongsTo('Infogue\Contributor', 'receiver');
    }

    /**
     * Many-to-one relationship, find out the conversation belong to sender.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo('Infogue\Contributor', 'sender');
    }

    /**
     * One-to-one relationship, get attachment in conversation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function attachment()
    {
        return $this->hasOne('Infogue\Attachment');
    }

    /**
     * Retrieve conversation in chat box.
     *
     * @param $id
     * @param null $last
     * @param null $user
     * @return array
     */
    public function retrieveConversation($id, $last = null, $user = null)
    {
        $contributor_id = $id;

        if (Auth::guard('admin')->check()) {
            $user_id = Auth::guard('admin')->user()->id;
        } else if (Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = $user;
        }


        /*
         * --------------------------------------------------------------------------
         * Conversation message
         * --------------------------------------------------------------------------
         * Each conversation between contributor it's represented by a message
         * record, find out and get the id then.
         */

        $message = $this->whereSender($user_id)->whereReceiver($contributor_id)
            ->orWhere('sender', '=', $contributor_id)->whereReceiver($user_id)->firstOrFail();

        /*
         * --------------------------------------------------------------------------
         * Populate the conversation
         * --------------------------------------------------------------------------
         * Select conversation by message id, and find out each conversation record
         * has attachment and join with contributor to get the information who
         * sender and who receiver.
         */

        $conversations = $this->select(DB::raw('conversations.id AS id, name, username, avatar, message_id, sender, receiver, message, file AS attachment, conversations.created_at'))
            ->leftJoin('attachments', 'conversations.id', '=', 'attachments.conversation_id')
            ->join('contributors', 'contributors.id', '=', 'sender')
            ->whereMessageId($message->message_id)
            ->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc');

        /*
         * --------------------------------------------------------------------------
         * Newly conversation checking
         * --------------------------------------------------------------------------
         * This condition checking if $last variable is passed as param then we
         * intent to check if new message has arrived and return it.
         */

        if ($last != null || $last != 0) {
            $conversations = $conversations->where('conversations.id', '>', $last)->get();
            return ["data" => $this->preConversationModifier($conversations, $user_id)];
        }

        /*
         * --------------------------------------------------------------------------
         * Retrieve per 15 conversation
         * --------------------------------------------------------------------------
         * If not then return conversation every 15 data and modify the data before
         * it returned.
         */

        return $this->preConversationModifier($conversations->paginate(15), $user_id);
    }

    /**
     * Modifying conversation data for javascript template.
     *
     * @param $conversations
     * @param $id
     * @return mixed
     */
    public function preConversationModifier($conversations, $id)
    {
        foreach ($conversations as $conversation):

            $conversation->contributor_ref = route('contributor.stream', [$conversation->username]);
            $conversation->avatar_ref = asset("images/contributors/{$conversation->avatar}");
            $conversation->attachment_ref = asset("file/{$conversation->attachment}");
            $conversation->owner = ($conversation->sender == $id) ? 'me' : 'they';
            $conversation->has_attachment = ($conversation->attachment == null) ? 'hidden' : '';
            $conversation->message = nl2br($conversation->message);
        endforeach;

        return $conversations;
    }

    public function broadcastConversation($sender, $receiver, $message)
    {
        $headers = array(
            'Authorization: key=' . env('GCM_KEY'),
            'Content-Type: application/json'
        );

        $data = [
            "to" => "/topics/message",
            "registration_ids" => [$receiver->gcm_token],
            "notification" => [
                "body" => $message,
                "title" => "Infogue Message",
                "icon" => "ic_mail"
            ],
            "data" => [
                "conversation" => $message,
                "id" => $sender->id,
                "name" => $sender->name,
                "username" => $sender->username,
                "avatar" => asset("images/contributors/{$sender->avatar}"),
                "gcm_token" => $receiver->gcm_token,
            ]
        ];

        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, env('GCM_URL'));

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarily
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            // die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);

        return $result;
    }
}
