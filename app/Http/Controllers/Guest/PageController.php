<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Function returning all movies
     * @returns { } movies
     */
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
