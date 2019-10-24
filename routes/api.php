<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  
Route::post('register', 'API\RegisterController@register');
  
Route::middleware('auth:api')->group( function () {
	Route::resource('packs', 'API\ItemController');
	// get promocode and check promocode
	Route::post('getpromocode', 'API\BaseController@getPromoCode');
	Route::post('checkpromocode','API\RegisterController@checkPromoCode');
	// promo code session end
});