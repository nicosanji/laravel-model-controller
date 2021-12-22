<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    function index()
    {
        // return view("index");
        $data = Movie::all();
        dump($data);
    }
}
