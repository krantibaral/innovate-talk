<?php

namespace App\Listeners;

use App\Events\CommentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class CommentEventListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  CommentEvent  $event
     * @return void
     */
    public function handle(CommentEvent $event)
    {
        $comment = $event->comment;

        // Example: Log the creation of the comment
        Log::info("Comment created with ID {$comment->id}: {$comment->name} - {$comment->text}");

        // Example: Send notification to admin or user
        // Replace with your notification logic
        // $comment->user->notify(new CommentCreatedNotification($comment));
    }
}
