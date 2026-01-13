<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubsController;

Route::get('/', function () {
    return view('index');
});

Route::post('/subscribes', [SubsController::class, 'store']);
