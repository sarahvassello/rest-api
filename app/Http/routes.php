<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//homepage route
Route::get('/', 'PagesController@home');

//beer wish list single routes
Route::get('/beers', 'BeerController@index');
Route::post('/beers', 'BeerController@create');

//beer wish list collection routes
Route::get('/beers/{id}', 'BeerController@show');
Route::put('/beers/{id}', 'BeerController@update');
Route::delete('/beers/{id}', 'BeerController@destroy');

//gross beer single routes
Route::get('/grosses', 'GrossController@index');
Route::post('/grosses', 'GrossController@create');

//gross beer collection routes
Route::get('/grosses/{id}', 'GrossController@show');
Route::put('/grosses/{id}', 'GrossController@update');
Route::delete('/grosses/{id}', 'GrossController@destroy');
