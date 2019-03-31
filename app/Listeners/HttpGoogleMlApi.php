<?php

namespace App\Listeners;

use App\Events\CallGoogleMlApi;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HttpGoogleMlApi implements ShouldQueue
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
     * @param  callGoogleMlApi  $event
     * @return void
     */
    public function handle(CallGoogleMlApi $event)
    {
        dd($event);
    }
}
