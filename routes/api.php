<?php

use App\Http\Controllers\api\nama_controler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [nama_controler::class, 'index']);
