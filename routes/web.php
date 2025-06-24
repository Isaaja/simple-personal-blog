<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (): mixed {
    return view('welcome');
});
