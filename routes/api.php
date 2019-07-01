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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
*
*           Clients Routes
*/
Route::get('/list/clients', array('middleware' => 'cors', 'uses' => 'Api\ClientController@index'));
Route::post('/add/clients', array('middleware' => 'cors', 'uses' => 'Api\ClientController@store'));
Route::get('/edit/clients/{t01_idClient}', array('middleware' => 'cors', 'uses' => 'Api\ClientController@edit'));
Route::put('/update/clients/{t01_idClient}', array('middleware' => 'cors', 'uses' => 'Api\ClientController@update'));
Route::delete('/delete/clients/{t01_idClient}', array('middleware' => 'cors', 'uses' => 'Api\ClientController@destroy'));
/*
*
*           Address Routes
*/
Route::get('/list/address/{t01_idClient}', array('middleware' => 'cors', 'uses' => 'Api\AddressController@addressClient'));
Route::post('/add/address', array('middleware' => 'cors', 'uses' => 'Api\AddressController@store'));
Route::get('/edit/address/{t03_idAddress}', array('middleware' => 'cors', 'uses' => 'Api\AddressController@edit'));
Route::put('/update/address/{t03_idAddress}', array('middleware' => 'cors', 'uses' => 'Api\AddressController@update'));
Route::delete('/delete/address/{t03_idAddress}', array('middleware' => 'cors', 'uses' => 'Api\AddressController@destroy'));

/*
*
*           Card Routes
*/
Route::get('/list/card/{t01_idClient}', array('middleware' => 'cors', 'uses' => 'Api\CardController@cardClient'));
Route::post('/add/card', array('middleware' => 'cors', 'uses' => 'Api\CardController@store'));
Route::get('/edit/card/{t02_idCard}', array('middleware' => 'cors', 'uses' => 'Api\CardController@edit'));
Route::put('/update/card/{t02_idCard}', array('middleware' => 'cors', 'uses' => 'Api\CardController@update'));
Route::delete('/delete/card/{t02_idCard}', array('middleware' => 'cors', 'uses' => 'Api\CardController@destroy'));
