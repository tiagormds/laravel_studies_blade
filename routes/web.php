<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home', ['myName' => 'Tiago Rafael']);
