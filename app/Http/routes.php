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

//beer routes
Route::get('beer', function() {
 //'BeerController@index') {
  $myBeer = [
  [
    'id' => '0',
    'name' => 'Citraquenchl',
    'style' => 'American IPA',
    'brewery' => 'Heist Brewery'
  ],
  [
    'id' => '1',
    'name' => 'The Event Horizon',
    'style' => 'Imperial Stout',
    'brewery' => 'Olde Hickory Brewery'
  ]
];
return Response::json($myBeer);

});
Route::get('/beer/{id}', function($id) {
	  return $id;
});

Route::post('/beer', function(Request $request) {
    dd($request->all());
});
