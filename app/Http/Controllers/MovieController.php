<?php

namespace App\Http\Controllers;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    function index(){
        $movies = Movie::all();
        return view("index")->with("movies", $movies);
    }

    function admin(){
        $movies = Movie::all();
        return view("admin-index")->with("movies", $movies);
    }
}
