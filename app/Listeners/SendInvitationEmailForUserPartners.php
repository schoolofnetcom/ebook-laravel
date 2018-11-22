<?php

namespace App\Listeners;

use App\Events\PostUserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvitationEmailForUserPartners
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
        //
    }
}
