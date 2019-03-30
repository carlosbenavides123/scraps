<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrashController extends Controller
{
    public function saveTrash(Request $request)
    {
        if ($request->hasFile('photo')) {

            //get filename with extension
            $filenamewithextension = $request->file('photo')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File to s3
            $response = Storage::disk('s3')->put($filenametostore, fopen($request->file('photo'), 'r+'), 'public');
            dd($response);


            //Store $filenametostore in the database
        } else {
            return ['message' => 'No photo found'];
        }
    }
    private function saveToDb($request, $path)
    {
        $path = storage_path() . '/' .  $path;
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
