<?php

use App\Http\Controllers\BlockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('blocks', BlockController::class);
