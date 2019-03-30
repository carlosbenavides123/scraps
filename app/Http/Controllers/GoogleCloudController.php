<?php

namespace App\Http\Controllers;
// include_once './vendor/autoload.php';
// require __DIR__ . '/vendor/autoload.php';

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleCloudController extends Controller
{

    // parameter takes in images
    public function Detect_label_gcs($path = '~/python/photos/trash1.jpg')
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=./gcp_key.json');
        // dd(getcwd());
        $imageAnnotator = new ImageAnnotatorClient([
            'credentials' => '/var/www/gcp_key.json'
        ]);
        // $imageAnnotator->useApplicationDefaultCredentials();

        # annotate the image
        $response = $imageAnnotator->labelDetection($path);
        // $labels = $response->getLabelAnnotations();

        // if ($labels) {
        //     print("Labels:" . PHP_EOL);
        //     foreach ($labels as $label) {
        //         return($label->getDescription() . PHP_EOL);
        //     }
        // } else {
        //     print('No label found' . PHP_EOL);
        // }

        $imageAnnotator->close();
    }
}
