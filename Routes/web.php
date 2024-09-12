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
    //layout models
    Route::view('layout/v1', 'gentelella::components.examples.dashboard.v1page')->name('gentelella.layout.v1');
    Route::view('layout/v2', 'gentelella::components.examples.dashboard.v2page')->name('gentelella.layout.v2');
    Route::view('layout/v3', 'gentelella::components.examples.dashboard.v3page')->name('gentelella.layout.v3');
    //form
    Route::view('example/form/general', 'gentelella::components.examples.form.generalformpage')->name('gentelella.example.form.general');
    Route::view('example/form/advanced', 'gentelella::components.examples.form.formadvancedpage')->name('gentelella.example.form.advanced');
    Route::view('example/form/validation', 'gentelella::components.examples.form.formvalidadionpage')->name('gentelella.example.form.validation');
    Route::view('example/form/wizard', 'gentelella::components.examples.form.formwizardspage')->name('gentelella.example.form.wizard');
    Route::view('example/form/upload', 'gentelella::components.examples.form.formuploadpage')->name('gentelella.example.form.upload');
    Route::view('example/form/buttons', 'gentelella::components.examples.form.formbuttonspage')->name('gentelella.example.form.buttons');
    //ui elements
    Route::view('example/ui/general', 'gentelella::components.examples.uielements.generalelementspage')->name('gentelella.example.ui.general');
    Route::view('example/ui/media-gallery', 'gentelella::components.examples.uielements.mediagallerypage')->name('gentelella.example.ui.media-gallery');
    Route::view('example/ui/typography', 'gentelella::components.examples.uielements.typographypage')->name('gentelella.example.ui.typography');
    Route::view('example/ui/icons', 'gentelella::components.examples.uielements.iconspage')->name('gentelella.example.ui.icons');
    Route::view('example/ui/glyphicons', 'gentelella::components.examples.uielements.glyphiconspage')->name('gentelella.example.ui.glyphicons');
    Route::view('example/ui/widgets', 'gentelella::components.examples.uielements.widgetspage')->name('gentelella.example.ui.widgets');
    Route::view('example/ui/invoice', 'gentelella::components.examples.uielements.invoicepage')->name('gentelella.example.ui.invoice');
    Route::view('example/ui/inbox', 'gentelella::components.examples.uielements.inboxpage')->name('gentelella.example.ui.inbox');
    Route::view('example/ui/calendar', 'gentelella::components.examples.uielements.calendarpage')->name('gentelella.example.ui.calendar');
    //tables
    Route::view('example/table/default', 'gentelella::components.examples.tables.tabledefaultpage')->name('gentelella.example.table.default');
    Route::view('example/table/dynamic', 'gentelella::components.examples.tables.tabledynamicpage')->name('gentelella.example.table.dynamic');
    //charts
    Route::view('example/chart/one', 'gentelella::components.examples.charts.chartonepage')->name('gentelella.example.chart.one');
    Route::view('example/chart/two', 'gentelella::components.examples.charts.charttwopage')->name('gentelella.example.chart.two');
    Route::view('example/chart/morisjs', 'gentelella::components.examples.charts.chartmorisjspage')->name('gentelella.example.chart.morisjs');
    Route::view('example/chart/echarts', 'gentelella::components.examples.charts.chartechartspage')->name('gentelella.example.chart.echarts');
    Route::view('example/chart/others', 'gentelella::components.examples.charts.chartotherspage')->name('gentelella.example.chart.others');
    //layout fixed features
    Route::view('example/layout/fixed-sidebar', 'gentelella::components.examples.layout.fixedsidebarpage')->name('gentelella.example.layout.fixed-sidebar');
    Route::view('example/layout/fixed-footer', 'gentelella::components.examples.layout.fixedfooterpage')->name('gentelella.example.layout.fixed-footer');
    //additional pages
    Route::view('example/ecommerce', 'gentelella::components.examples.ecommercepage')->name('gentelella.example.ecommerce');
    Route::view('example/projects', 'gentelella::components.examples.projectspage')->name('gentelella.example.projects');
    Route::view('example/projectdetail', 'gentelella::components.examples.projectdetailpage')->name('gentelella.example.projectdetail');
    Route::view('example/contacts', 'gentelella::components.examples.contactspage')->name('gentelella.example.contacts');
    Route::view('example/profile', 'gentelella::components.examples.profilepage')->name('gentelella.example.profile');
    //extras
    Route::view('example/extra/403', 'gentelella::components.examples.403page')->name('gentelella.example.extra.403');
    Route::view('example/extra/404', 'gentelella::components.examples.404page')->name('gentelella.example.extra.404');
    Route::view('example/extra/500', 'gentelella::components.examples.500page')->name('gentelella.example.extra.500');
    Route::view('example/extra/plain', 'gentelella::components.examples.plainpage')->name('gentelella.example.extra.plain');
    Route::view('example/extra/login', 'gentelella::components.examples.loginpage')->name('gentelella.example.extra.login');
    Route::view('example/extra/pricing', 'gentelella::components.examples.pricingpage')->name('gentelella.example.extra.pricing');

    Route::view('example/menulevel2', 'gentelella::components.examples.menulevel2page')->name('gentelella.example.menulevel2');
});
