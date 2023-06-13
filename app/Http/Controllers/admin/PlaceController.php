<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Places;
use App\Models\Transport;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index($id)
    {
        $place = Places::find($id);
        $activities = Activity::where('place_id', $id)->get();
        $transports = Transport::where('place_id', $id)->get();
        return view('admin.place', [
            'place' => $place,
            'activities' => $activities,
            'transports' => $transports
        ]);
    }
}
