<?php

namespace App\Listeners;

use App\Events\CallGoogleMlApi;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\TrashML;

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

    private function newEntry($entry)
    {
        $lat = $entry;
        $lng = $entry;
        $size = $entry;
        $url = $entry;

        TrashML::create([
            'lat' => $lat,
            'lng' => $lng,
            'size' => $size,
            'url' => $url
        ]);
    }

    private function loopThroughData($response)
    {
        foreach ($response as $entry) {
            $this->newEntry($entry);
        }
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

        $payload = ['name' => $url];

        $response = $client->request('POST', $server, $payload);

        // dd($response);
        $this->loopThroughData($response);
        // $event->broadcastOn();
    }
}
