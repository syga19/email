<?php

use Illuminate\Support\Facades\Route;


Route::get('/email.copy/', function () {
    return view('welcome');
})->name('index');

Route::get('/email.copy/emailtemplate', function () {
    return view('emailtemplate');
})->name('template');
