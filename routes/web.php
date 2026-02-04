<?php

use App\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/movies", [MovieController::class,"index"]);
Route::get("admin/movies", [MovieController::class,"admin"])->name("admin");
Route::get("admin/movies/create", [MovieController::class,"create"])->name("create");
Route::post("admin/movies/store", [MovieController::class,"store"])->name("movie-store");
Route::get("/admin/movies/{id}/edit", [MovieController::class,"edit"])->name("edit");
Route::patch("admin/movies/{id}/update", [MovieController::class,"update"])->name("update");
Route::delete("/admin/movies/{id}/destroy", [MovieController::class,"delete"])->name("delete");