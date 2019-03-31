<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Trash;

use Event;
use App\Events\CallGoogleMlApi;

class TrashController extends Controller
{
    public function saveTrash(Request $request)
    {
        if ($request->hasFile('photo')) {

            //get filename with extension
            $filenametostore = $this->getFileName($request, $request->file('photo')->getClientOriginalName());

            //Upload File to s3
            try {
                $response = Storage::disk('s3')->put($filenametostore, fopen($request->file('photo'), 'r+'), 'public');
            } catch (\Exception $e) {
                dd($e);
            }

            try {
                $url = Storage::disk('s3')->url($filenametostore);
            } catch (\Exception $e) {
                dd($e);
            }
            
            return $this->saveToDb($request['lat'], $request['long'], $request['size'], $url);
        } else {
            return ['message' => 'No photo found'];
        }
    }
    private function saveToDb($lat, $long, $size, $url)
    {
        try {
            Trash::create([
                'lat' => $lat,
                'long' => $long,
                'size' => $size,
                'url' => $url
            ]);
        } catch (\Exception $e) {
            dd($e);
            return ['message' => 'Photo upload was not successful'];
        }
        
        event(new CallGoogleMlApi($url));
        
        return [
            'message' => 'Photo was successful',
            'lat' => $lat,
            'long' => $long,
            'size' => $size,
            'url' => $url
        ];
    }
    public function getAll()
    {
        return Trash::all();
    }
    
    private function getFileName($request, $filenamewithextension)
    {
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //get file extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        //filename to store
        $filenametostore = $filename . '_' . time() . '.' .$extension;
        return      $filenametostore;
    }
}

 
 
 
 
 