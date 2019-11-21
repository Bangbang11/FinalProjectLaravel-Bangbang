<?php

namespace App\Listeners;

use App\Events\ApproveEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ApproveMailable;

class ApproveEmailSender
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
     * @param  ApproveEvent  $event
     * @return void
     */
    public function handle(ApproveEvent $event)
    {
        $job = $event->job;
        $detail = [
            'email' => $job->biodata->user->email,
        ];
        Mail::to($job->biodata->user->email)->queue(new ApproveMailable($detail));
    }
}
