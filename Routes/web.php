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

    Route::view('example/ui/general', 'gentelella::components.examples.uielements.generalelementspage')->name('gentelella.example.ui.general');
    Route::view('example/ui/media-gallery', 'gentelella::components.examples.uielements.mediagallerypage')->name('gentelella.example.ui.media-gallery');
    Route::view('example/ui/typography', 'gentelella::components.examples.uielements.typographypage')->name('gentelella.example.ui.typography');
    Route::view('example/ui/icons', 'gentelella::components.examples.uielements.iconspage')->name('gentelella.example.ui.icons');
    Route::view('example/ui/glyphicons', 'gentelella::components.examples.uielements.glyphiconspage')->name('gentelella.example.ui.glyphicons');
    Route::view('example/ui/widgets', 'gentelella::components.examples.uielements.widgetspage')->name('gentelella.example.ui.widgets');
    Route::view('example/ui/invoice', 'gentelella::components.examples.uielements.invoicepage')->name('gentelella.example.ui.invoice');
    Route::view('example/ui/inbox', 'gentelella::components.examples.uielements.inboxpage')->name('gentelella.example.ui.inbox');
    Route::view('example/ui/calendar', 'gentelella::components.examples.uielements.calendarpage')->name('gentelella.example.ui.calendar');

    Route::view('example/table/default', 'gentelella::components.examples.tables.tabledefaultpage')->name('gentelella.example.table.default');
    Route::view('example/table/dynamic', 'gentelella::components.examples.tables.tabledynamicpage')->name('gentelella.example.table.dynamic');

    Route::view('example/chart/one', 'gentelella::components.examples.charts.chartonepage')->name('gentelella.example.chart.one');
    Route::view('example/chart/two', 'gentelella::components.examples.charts.charttwopage')->name('gentelella.example.chart.two');
    Route::view('example/chart/morisjs', 'gentelella::components.examples.charts.chartmorisjspage')->name('gentelella.example.chart.morisjs');
    Route::view('example/chart/echarts', 'gentelella::components.examples.charts.chartechartspage')->name('gentelella.example.chart.echarts');
    Route::view('example/chart/others', 'gentelella::components.examples.charts.chartotherspage')->name('gentelella.example.chart.others');
});
