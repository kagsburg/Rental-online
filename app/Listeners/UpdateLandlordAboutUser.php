<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class UpdateLandlordAboutUser
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
     * @param  RegisterUser  $event
     * @return void
     */
    public function handle(RegisterUser $event)
    {
        Mail::to($event->user->Email)->send(new WelcomeMail($event->user));
        //
        // var_dump("RegisteredUser, event fired");
    }
}
