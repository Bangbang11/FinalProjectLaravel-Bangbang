<?php

namespace App\Listeners;

use App\Events\RejectEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\RejectMailable;

class RejectEmailSender
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
     * @param  RejectEvent  $event
     * @return void
     */
    public function handle(RejectEvent $event)
    {
        $job = $event->job;
        $detail = [
            'email' => $job->biodata->user->email,
        ];
        Mail::to($job->biodata->user->email)->queue(new RejectMailable($detail));
    }
}
