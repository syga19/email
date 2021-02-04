<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', 'App\Http\Controllers\clientsController@index');
// Route::get('/{id}', 'App\Http\Controllers\clientsController@show');



Route::get('/', function () { return view('clients'); })->name('index');
Route::get('emailtemplate', function () { return view('emailtemplate'); })->name('template');    

Route::get('/','App\Http\Controllers\clientsController@index')->name('index');
Route::get('/{​​​​​​​​id}​​​​​​​​',[clientsController::class,'show'])->name('show');
Route::post('/', [clientsController::class,'store']);

// Route::get('/', function () {
//     var_dump(DB::connection()->getPdo());
// });

