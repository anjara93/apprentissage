<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/car/form', [CarsController::class, 'AfficheForm'])->name('car.form');
Route::post('/car/form', [CarsController::class, 'ajout']);

//liste des voitures
Route::get('/car', [CarsController::class, 'liste'])->name('car.index');

//detail des voitures
Route::get('/car/{id}', [CarsController::class, 'detail'])->name('car.detail');

//update cars
Route::get('/car/{id}/update', [CarsController::class, 'AfficheFormUpdate'])->name('car.update');
Route::post('/car/{id}/update', [CarsController::class, 'update']);