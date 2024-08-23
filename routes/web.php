<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page', function () {
    return view('/articles/page');
});

Route::get("/any", function () {
    return view('permite tudo');
});

Route::get('/page2', function () {
    return view('/articles/page2');
});

Route::get('/cisco', function () {
    return view('/site/cisco');
});
