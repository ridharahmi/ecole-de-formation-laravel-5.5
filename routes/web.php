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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'PageController@about');
Route::get('/formation', 'PageController@formation');
Route::post('/inscription', 'PageController@inscription');
Route::match(['get', 'post'],'contact', 'PageController@contact');

Route::get('listcontact', 'homeController@listcontact');
Route::get('deleteContact/{id}', 'homeController@deletecontact');

Route::resource('listformation', 'FormationController');
