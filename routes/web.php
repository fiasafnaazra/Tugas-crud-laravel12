<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonatController;

Route::resource('donat', DonatController::class);

Route::get('/', function () {
    return view('welcome');
});
