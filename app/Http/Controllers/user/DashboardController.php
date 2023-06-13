<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Places;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $places = Places::all();
        return view('user.dashboard', [
            'places' => $places
        ]);
    }
}
