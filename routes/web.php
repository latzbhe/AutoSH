<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autosh', [TemplateController::class, 'index']);


