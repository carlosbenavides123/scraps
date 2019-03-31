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
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        // dd($response);
        $event->broadcastOn();
    }
}
