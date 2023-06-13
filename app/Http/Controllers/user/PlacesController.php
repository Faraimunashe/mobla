<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        return view('user.places');
    }

    public function add(Request $request)
    {
        $request->validate([
            'lat'=>'required',
            'lon'=>'required',
            'address_address'=>'required'
        ]);

        $place = new Places();
        $place->lat = $request->lat;
        $place->lon = $request->lon;
        $place->address = $request->address_address;
        $place->save();

        return redirect()->back()->with('success', 'successfully updated location');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'place_id'=>'required',
        ]);


        $place = Places::find($request->place_id);
        $place->delete();

        return redirect()->back()->with('success', 'successfully deleted a place');
    }
}
