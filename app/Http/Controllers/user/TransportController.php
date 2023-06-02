<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index()
    {
        $transport = Transport::paginate(5);
        return view('user.transport', [
            'transports' => $transport
        ]);
    }
}
