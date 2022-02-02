<?php

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

Route::get('/', function () {
    $comics = config("comics");

    return view('home', ["comics" => $comics]);
});

Route::get("/post/0", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["0"]]);
});

Route::get("/post/1", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["1"]]);
});

Route::get("/post/2", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["2"]]);
});

Route::get("/post/3", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["3"]]);
});

Route::get("/post/4", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["4"]]);
});

Route::get("/post/5", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["5"]]);
});

Route::get("/post/6", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["6"]]);
});

Route::get("/post/7", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["7"]]);
});

Route::get("/post/8", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["8"]]);
});

Route::get("/post/9", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["9"]]);
});

Route::get("/post/10", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["10"]]);
});

Route::get("/post/11", function () {
    $comics = config("comics");

    return view('template-post', ["comics" => $comics["11"]]);
});