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
        $server = 'https://api.github.com/repos/guzzle/guzzle';
        $url = $event->url;
        $client = new \GuzzleHttp\Client();

        $payload = ['url' => $url];

        $response = $client->request('POST', $server, $payload);
        // dd($response);
        $event->broadcastOn();
    }
}
