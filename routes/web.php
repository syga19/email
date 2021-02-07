<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\TemplatesController;

// Route::get('/', 'App\Http\Controllers\clientsController@index');
// Route::get('/{id}', 'App\Http\Controllers\clientsController@show');



// Route::get('/', function () { return view('clients'); })->name('clients');
Route::get('/emailtemplate', function () { return view('emailtemplate'); })->name('emailtemplate');    

Route::get('/','App\Http\Controllers\clientsController@index')->name('index');
Route::get('/{​​​​​​​​id}​​​​​​​​',[ClientsController::class,'show'])->name('show');
Route::post('/', [ClientsController::class,'store']);

Route::get('/emailtemplate','App\Http\Controllers\TemplatesController@index')->name('emailtemplate.index');
Route::get('/emailtemplate/{​​​​​​​​id}​​​​​​​​',[TemplatesController::class,'show'])->name('emailtemplate.show');
Route::post('/emailtemplate', [TemplatesController::class,'store']);



// Route::get('/', function () {
//     var_dump(DB::connection()->getPdo());
// });

