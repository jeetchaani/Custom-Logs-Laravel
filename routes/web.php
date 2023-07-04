<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/log',function(){
     Log::info("My Normal Log");
     dd("created");
});

Route::get('/customlog', function () {
    Log::channel('customlog')->info('this is new section');
    dd('created');
});
