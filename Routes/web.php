<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('gentelella')->group(function () {
    Route::view('layout/v1', 'gentelella::components.layout.v1')->name('gentelella.layout.v1');
    Route::view('layout/v2', 'gentelella::components.layout.v2')->name('gentelella.layout.v2');
    Route::view('layout/v3', 'gentelella::components.layout.v3')->name('gentelella.layout.v3');
});
