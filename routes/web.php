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
    $data = [
        'zero'=>'ciao0',
        'uno'=>'ciao1',
        'due'=>'ciao2'
    ];
    return view('home',$data);
});
Route::get('/home', function () {
    return view('home');
});