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

Route::middleware('secure') -> get('/', function () {
    return "home page";
});
Route:: get('/error', function () {
    return "u dont have token";
});


Route::middleware('secure') -> get('/protected_rou', function(){
    return "u can access here";
});