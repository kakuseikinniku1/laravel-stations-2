<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMovieRequest;
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

    function create(Request $request){
        return view("create");
    }

    function store(CreateMovieRequest $request){
        try {
            $movie = new Movie();
            $movie->title = $request->title;
            $movie->description = $request->description;
            $movie->image_url = $request->image_url;
            $movie->is_showing = $request->is_showing;
            $movie->published_year = $request->published_year;
            $movie->save();
            return redirect()->route('create', $movie->id)->with('success', '映画を更新しました');;
        } catch (\Exception $e) {
            return redirect()->route('create', $movie->id)->with("error", $e->getMessage());
        }
    }

    function edit(Movie $id){
        $movies = Movie::find( $id )->first();
        return view("edit")->with("movie", $movies);
    }

    function update(UpdateMovieRequest $request, Movie $id){
    try {
        $movie = Movie::find( $id )->first();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->image_url = $request->image_url;
        $movie->is_showing = $request->is_showing;
        $movie->published_year = $request->published_year;
        $movie->save();
        return redirect()->route('edit', $movie->id)->with('success', '映画を更新しました');
    } catch (\Exception $e) {
        return redirect()->route('edit', $movie->id)->with("error", $e->getMessage());
    }   
}

    function delete(Movie $id){
        try {
            $id->delete();
            return redirect()->route("admin")->with("success","削除できました");
        }
        catch (\Exception $e) {
            abort(404);
        }
    }
}