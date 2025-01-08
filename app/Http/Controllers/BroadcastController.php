<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function create()
    {
        return view('broadcasts.create');
    }
}
