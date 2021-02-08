<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\TemplatesController;

// Route::get('/', 'App\Http\Controllers\clientsController@index');
// Route::get('/{id}', 'App\Http\Controllers\clientsController@show');


Route::get('/', function () { return view('clients'); })->name('clients');
Route::get('/emailtemplate', function () { return view('emailtemplate'); })->name('emailtemplate');    

Route::get('/','App\Http\Controllers\clientsController@index')->name('clients.index');
Route::get('/{​​​​​​​​id}​​​​​​​​',[ClientsController::class, 'show'])->name('clients.show');
Route::post('/', [ClientsController::class, 'store']);
Route::delete('/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
Route::get('/{id}', 'App\Http\Controllers\clientsController@show');
Route::put('/{id}', [ClientsController::class, 'update'])->name('clients.update');


Route::get('/emailtemplate','App\Http\Controllers\TemplatesController@index')->name('emailtemplate.index');
Route::get('/emailtemplate/{​​​​​​​​id}​​​​​​​​',[TemplatesController::class,'show'])->name('emailtemplate.show');
Route::post('/emailtemplate', [TemplatesController::class,'store']);
Route::delete('/emailtemplate/{id}', [TemplatesController::class, 'destroy'])->name('template.destroy');
Route::get('/emailtemplate/{id}', 'App\Http\Controllers\TemplatesController@show');
Route::put('/emailtemplate/{id}', [TemplatesController::class, 'update'])->name('template.update');


// Route::get('/', function () {
//     var_dump(DB::connection()->getPdo());
// });

