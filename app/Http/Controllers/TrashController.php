<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrashData;

class TrashController extends Controller
{
    private $storagePath = "./images";
    public function saveEntry(Request $request)
    {
        if (!$request->hasFile('photo')) {
            return ['message_error' => 'No photo found.'];
        }

        $path = $request->photo->store('images');

        return $this->saveToDb($request, $path);
    }

    private function saveToDb($request, $path)
    {
        $path = storage_path() . $path;
        try {
            TrashData::create([
                'lat' => $request['lat'],
                'long' => $request['long'],
                'file_location' => $path
            ]);
        } catch (\Exception $e) {
            return ['message' => 'Photo upload was not successful'];
        }


        return ['message' => 'Photo was successful'];
    }

    public function getAll()
    {
        return TrashData::all();
    }
}
