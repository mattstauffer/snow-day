<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function create()
    {
        return view('broadcasts.create');
    }

    public function show(Broadcast $broadcast)
    {
        return view('broadcasts.show', ['broadcast' => $broadcast]);
    }
}
