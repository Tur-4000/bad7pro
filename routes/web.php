<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{workType}', 'PortfolioController@filter')->name('portfolio.filter');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
Route::post('/order/add', 'OrderController@store')->name('order.add');
Route::get('/vacancies', 'VacanciesController@index')->name('vacancies.index');


// Маршруты админки
//Route::get('/manage', function () {
//    return view('manage.index');
//})->name('manage.index');

Route::get('/manage', 'Manage\ManageOrderController@index')->name('manage.index');
Route::resource('/manage/order', 'Manage\ManageOrderController')
    ->only('show', 'edit', 'update', 'destroy')
    ->names('manage.order');


Route::resource('/manage/portfolio', 'Manage\ManagePortfolioController')
    ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
    ->names('manage.portfolio');
