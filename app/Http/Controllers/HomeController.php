<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    // function index()
    // {
    //     $movies = Movie::all();
    //     return view("index", $movies);
    //     // dump($data);
    // }

    public function index()
    {
        $movies = Movie::all();
        return view('index', ["movies" => $movies]);
    }
}
