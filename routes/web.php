<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home', ['slot' => 'Papooo John Doe']);
});
