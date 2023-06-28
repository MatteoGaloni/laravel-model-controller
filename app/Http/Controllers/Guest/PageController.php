<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $links = config('store.someLinks');
        $data = Movie::all();
        return view('movies', compact('data', 'links'));
    }
}
