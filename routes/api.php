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
/*
*
*           Manufactory Routes
*/
Route::get('/list/manufacturer', array('middleware' => 'cors', 'uses' => 'Api\ManufacturerController@index'));
Route::post('/add/manufacturer', array('middleware' => 'cors', 'uses' => 'Api\ManufacturerController@store'));
Route::get('/show/manufacturer/{t07_idManufacturer}', array('middleware' => 'cors', 'uses' => 'Api\ManufacturerController@show'));
Route::put('/update/manufacturer/{t07_idManufacturer}', array('middleware' => 'cors', 'uses' => 'Api\ManufacturerController@update'));
Route::delete('/delete/manufacturer/{t07_idManufacturer}', array('middleware' => 'cors', 'uses' => 'Api\ManufacturerController@destroy'));
/*
*
*           Modality Routes
*/
Route::get('/list/modality', array('middleware' => 'cors', 'uses' => 'Api\ModalityController@index'));
Route::post('/add/modality', array('middleware' => 'cors', 'uses' => 'Api\ModalityController@store'));
Route::get('/show/modality/{t05_idModality}', array('middleware' => 'cors', 'uses' => 'Api\ModalityController@show'));
Route::put('/update/modality/{t05_idModality}', array('middleware' => 'cors', 'uses' => 'Api\ModalityController@update'));
Route::delete('/delete/modality/{t05_idModality}', array('middleware' => 'cors', 'uses' => 'Api\ModalityController@destroy'));
/*
*
*           Parts Routes
*/
Route::get('/list/parts', array('middleware' => 'cors', 'uses' => 'Api\PartsController@index'));
Route::post('/add/parts', array('middleware' => 'cors', 'uses' => 'Api\PartsController@store'));
Route::get('/show/parts/{t04_idParts}', array('middleware' => 'cors', 'uses' => 'Api\PartsController@show'));
Route::put('/update/parts/{t04_idParts}', array('middleware' => 'cors', 'uses' => 'Api\PartsController@update'));
Route::delete('/delete/parts/{t04_idParts}', array('middleware' => 'cors', 'uses' => 'Api\PartsController@destroy'));
