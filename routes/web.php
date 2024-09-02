<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('Hi, welcome');
});
 
 
Route::get('/about', function () {
    return 'This is Twinkle,s laravel page';
});