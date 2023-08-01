<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

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

Route::get("/movies", [MoviesController::class, "index"]);
Route::get("/movies/{id}", [MoviesController::class, "show"]);
Route::get("/createmovie", [MoviesController::class, "createMovie"]);
Route::post("/createmovie", [MoviesController::class, "store"]);
Route::post("/createcomment", [CommentsController::class, "store"]);



