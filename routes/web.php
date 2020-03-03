<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider wcuma ithin a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*** Front Pages ***/

Route::get('/', 'GroupsController@index');

// Resources
Route::resource('contacts', 'ContactsController')->except(['show']);
Route::resource('groups', 'GroupsController')->except(['show']);

