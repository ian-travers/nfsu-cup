<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/tourneys', function () {
        return view('tourneys');
    })->name('tourneys');

    Route::get('/stats', function () {
        return view('stats');
    })->name('stats');

    Route::get('/server/monitor', function () {
        return view('monitor');
    })->name('server.monitor');
});
