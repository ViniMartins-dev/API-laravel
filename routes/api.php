<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/manchete', function (Request $request) {
    return $request->manchetes();
})->middleware('auth:sanctum');
