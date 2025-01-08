<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnowDayController extends Controller
{
    public function create()
    {
        return view('snow-days.create');
    }
}
