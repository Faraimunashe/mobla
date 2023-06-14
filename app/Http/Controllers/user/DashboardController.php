<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Places;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $places = Places::all();
        if($request->method() == "POST")
        {
            $places = Places::where('address', 'LIKE', '%'.$request->search.'%')->get();
        }

        return view('user.dashboard', [
            'places' => $places
        ]);
    }
}
