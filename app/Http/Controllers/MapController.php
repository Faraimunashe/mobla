<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function nearestHospital(Request $request)
    {
        $latitude = "-19.5158839";
        $longitude = "29.8467929";

        //dd($latitude, $longitude);

        $apiKey = 'AIzaSyDQh7KTeGZ23hjCfYKv_-GCCMit31Fu1xw';

        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'keyword' => 'hospital',
                'location' => $latitude . ',' . $longitude,
                'radius' => 15000, // The radius in meters for the search (adjust as needed)
                'type' => 'hospital',
                'key' => $apiKey,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        $hospitals = $result['results'];
        //dd($hospitals);

        return view('nearest_hospital', compact('hospitals'));
    }

    public function nearestPolice(Request $request)
    {
        $latitude = "-19.5158839";
        $longitude = "29.8467929";

        //dd($latitude, $longitude);

        $apiKey = 'AIzaSyDQh7KTeGZ23hjCfYKv_-GCCMit31Fu1xw';

        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'keyword' => 'police',
                'location' => $latitude . ',' . $longitude,
                'radius' => 15000, // The radius in meters for the search (adjust as needed)
                'type' => 'police',
                'key' => $apiKey,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        $polices = $result['results'];
        //dd($hospitals);

        return view('nearest_police', compact('polices'));
    }

    public function nearestAirport(Request $request)
    {
        $latitude = "-19.5158839";
        $longitude = "29.8467929";

        //dd($latitude, $longitude);

        $apiKey = 'AIzaSyDQh7KTeGZ23hjCfYKv_-GCCMit31Fu1xw';

        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'keyword' => 'airport',
                'location' => $latitude . ',' . $longitude,
                'radius' => 15000, // The radius in meters for the search (adjust as needed)
                'type' => 'airport',
                'key' => $apiKey,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        $airports = $result['results'];
        //dd($hospitals);

        return view('nearest_airport', compact('airports'));
    }

    public function nearestRailway(Request $request)
    {
        $latitude = "-19.5158839";
        $longitude = "29.8467929";

        //dd($latitude, $longitude);

        $apiKey = '';

        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'keyword' => 'railway',
                'location' => $latitude . ',' . $longitude,
                'radius' => 15000, // The radius in meters for the search (adjust as needed)
                'type' => 'railway',
                'key' => $apiKey,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        $railways = $result['results'];
        //dd($hospitals);

        return view('nearest_railway', compact('railways'));
    }
}
