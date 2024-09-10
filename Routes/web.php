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
    Route::view('example/form/general', 'gentelella::components.examples.form.generalformpage')->name('gentelella.example.form.general');
    Route::view('example/form/advanced', 'gentelella::components.examples.form.formadvancedpage')->name('gentelella.example.form.advanced');
    Route::view('example/form/validation', 'gentelella::components.examples.form.formvalidadionpage')->name('gentelella.example.form.validation');
    Route::view('example/form/wizard', 'gentelella::components.examples.form.formwizardspage')->name('gentelella.example.form.wizard');
    Route::view('example/form/upload', 'gentelella::components.examples.form.formuploadpage')->name('gentelella.example.form.upload');
    Route::view('example/form/buttons', 'gentelella::components.examples.form.formbuttonspage')->name('gentelella.example.form.buttons');
});
