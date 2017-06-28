<?php

namespace App\Listeners;

use App\Events\EventThreadCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckForSpam implements ShouldQueue
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
     * @param  EventThreadCreated  $event
     * @return void
     */
    public function handle(EventThreadCreated $event)
    {
        
        var_dump($event->thread['new_name'] . ' listener 1 called');
        echo 'Checking for spam..!';
    }
}
