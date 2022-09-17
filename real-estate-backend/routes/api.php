<?php

use Illuminate\Http\Request;
use App\Models\User;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/ping', function (Request $request) {
    return response()->json(['ping' => 'pong']);
});

Route::group([
    'middleware' => 'jwt:no',
    'namespace' => 'API',
    'prefix' => 'auth'
], function($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');    
});

Route::group([
    'middleware' => 'jwt',
    'namespace' => 'API',
    'prefix' => 'auth'
], function($router) {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'jwt:no',
    'namespace' => 'API',
], function($router) {
    Route::get('validate_token', 'AuthController@check');
    
    Route::get('agents', 'AgentController@index');
    Route::get('agents/{id}', 'AgentController@show');
    Route::get('companies', 'CompanyController@index');
    Route::get('properties', 'PropertyController@index');
    Route::get('properties/{id}', 'PropertyController@show');
    Route::get('properties/{id}/related', 'PropertyController@index');
    
    Route::get('property-types', 'TypeController@index');
    Route::get('property-status', 'StatusController@index');
});

Route::group([
    'middleware' => 'jwt', // temporarily `jwt:no`, should be `jwt` only
    'namespace' => 'API',
], function($router) {
    Route::post('/charge', 'StripeController@charge');
    Route::post('/charge/manual-pay', 'StripeController@manualpay');
    Route::get('purchased-properties', 'PropertyController@purchasedProperties');
    Route::get('application/{id}', 'PropertyController@application');
    Route::post('application/cancel-recurring/{id}', 'ApplicationController@cancelRecurring');

    Route::post('properties', 'PropertyController@store');
    Route::delete('properties/{id}', 'PropertyController@delete');
    Route::post('properties/{id}/stop-rent', 'PropertyController@stopRent');

    Route::post('properties/{property_id}/plans', 'PlanController@store');
    Route::post('properties/{property_id}/plans/{plan_id}/galleries', 'PlanController@store');
    Route::delete('plans/{id}', 'PlanController@delete');

    Route::post('properties/{property_id}/galleries', 'GalleryController@store');
    Route::delete('galleries/{id}', 'GalleryController@delete');
    Route::post('attachments/', 'GalleryController@storeAttachment');

    Route::post('property-types/', 'TypeController@store');
    Route::delete('property-types/{id}', 'TypeController@delete');
    
    Route::post('property-status', 'StatusController@store');
    Route::delete('property-status/{id}', 'StatusController@delete');

    Route::get('favorites', 'FavoriteController@index');

    Route::post('favorites/{id}', 'FavoriteController@store');
    Route::delete('favorites/{id}', 'FavoriteController@delete');

    Route::post('applications/', 'ApplicationController@store');
});