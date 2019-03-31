<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Trash;
use Illuminate\Support\Facades\Input;

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
                return ['message'=>'Saving it into the bucket was not successful.'];
            }

            try {
                $url = Storage::disk('s3')->url($filenametostore);
            } catch (\Exception $e) {
                return ['message'=>'Getting url was not successful.'];
            }

            return $this->saveToDb($request['lat'], $request['lng'], $request['size'], $url);
        } else {
            return ['message' => 'No photo found'];
        }
    }
    private function saveToDb($lat, $lng, $size, $url)
    {
        // dd(var_dump($url));
        // dd(var_dump($size));
        // dd(var_dump($lng));
        // dd(var_dump($lat));
        try {
            Trash::create([
                'lat' => $lat,
                'lng' => $lng,
                'size' => $size,
                'url' => $url
            ]);
        } catch (\Exception $e) {
            // dd($e);

            dd(var_dump($e->__toString()));

            return ['message' => 'Photo upload was not successful'];
        }
        return [
            'message' => 'Photo was successful',
            'lat' => $lat,
            'lng' => $lng,
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
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        return      $filenametostore;
    }
}
