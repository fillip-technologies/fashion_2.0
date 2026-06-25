<?php

namespace App\Listeners;

use App\Events\QueryEmailEvent;
use App\Mail\CMSQueryEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class QueryEmailListener
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
    public function handle(QueryEmailEvent $event): void
    {
        Mail::to('developer4.filliptechnologies@gmail.com')->send(new CMSQueryEmail($event->data));
    }
}
