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
Route::get('/{all}', function () {
    //get current url
    $url = url()->current();
    if (strpos($url, 'external') !== false) {
        return view('external');
    }

    return view('index');
})->where("all", ".*");

