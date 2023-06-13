<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Places;
use App\Models\Transport;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $places = Places::all();
        return view('admin.dashboard', [
            'places' => $places
        ]);
    }

    public function add_transport(Request $request)
    {
        $request->validate([
            'place_id' => ['required', 'integer'],
            'service' => ['required', 'string'],
            'destination' => ['required', 'string'],
            'departure' => ['required'],
            'capacity' => ['required', 'integer'],
        ]);

        try{
            $trans = new Transport();
            $trans->place_id = $request->place_id;
            $trans->service = $request->service;
            $trans->destination = $request->destination;
            $trans->departure = $request->departure;
            $trans->capacity = $request->capacity;
            $trans->save();

            return redirect()->back()->with('success', 'successfully added transport service');
        }catch(Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function add_activity(Request $request)
    {
        $request->validate([
            'place_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
        ]);

        try{
            $act = new Activity();
            $act->place_id = $request->place_id;
            $act->name = $request->name;
            $act->save();

            return redirect()->back()->with('success', 'successfully added activity');
        }catch(Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
