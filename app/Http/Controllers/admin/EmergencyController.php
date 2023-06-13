<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Places;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmergencyController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'place_id' => ['required', 'integer'],
            'service' => ['required', 'string']
        ]);

        $place = Places::find($request->place_id);
        if(is_null($place))
        {
            return redirect()->back()->with('error', 'place not specified');
        }

        $latitude = $place->lat;
        $longitude = $place->lon;

        //dd($latitude, $longitude);

        $apiKey = 'AIzaSyDQh7KTeGZ23hjCfYKv_-GCCMit31Fu1xw';

        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'keyword' => $request->service,
                'location' => $latitude . ',' . $longitude,
                'radius' => 10000, // The radius in meters for the search (adjust as needed)
                'type' => $request->service,
                'key' => $apiKey,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        $services = $result['results'];
        //dd($services);

        return view('nearest_services', [
            'services' => $services,
            'serviceName' => $request->service
        ]);
    }
}
