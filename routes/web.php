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
    $technologies = [
        'HTML',
        'CSS',
        'JavaScript',
        'Vue',
        'Vite',
        'Axios',
        'PHP',
        'MySQL',
        'Laravel'
    ];
    return view('home', compact('technologies'));
});

Route::get('/technologies', function(){
    return view('technologies.html');
});
Route::get('/technologies2', function(){
    return view('technologies2.css');
});
Route::get('/technologies3', function(){
    return view('technologies3.javascript');
});