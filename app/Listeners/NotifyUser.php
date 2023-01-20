<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\UserMail;
use App\Events\PostCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyUser

{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $user = User::get();
        Mail::to($user->email)->send(new UserMail($event->post));
    }
}
