<?php

use Illuminate\Support\Facades\Route;

Route::localized(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
