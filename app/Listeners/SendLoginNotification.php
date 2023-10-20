<?php

namespace App\Listeners;

use App\Events\UserLoggedInEvent;
use App\Notifications\UserLoggedInNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLoginNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLoggedInEvent $event)
    {
        $user = $event->user;
        $user->notify(new UserLoggedInNotification($user));
    }
}
