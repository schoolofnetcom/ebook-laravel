<?php

namespace App\Listeners;

use App\Events\PostUserRegister;
use Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostUserRegister  $event
     * @return void
     */
    public function handle(PostUserRegister $event)
    {
        $user = $event->getUser();
        Mail::send('emails.welcome', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email, $user->name)->subject('Welcome my Friend!');
        });
    }
}
