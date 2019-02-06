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

Route::group([ 'prefix' => 'auth' ],
function ()
{
    Route::post('student/login',    'StudentAuthController@login');
    Route::post('student/logout',   'StudentAuthController@logout');
    Route::post('student/refresh',  'StudentAuthController@refresh');
    Route::post('student/me',       'StudentAuthController@me');
});

Route::group([ 'prefix' => 'school' ],
function ()
{
    Route::group([ 'prefix' => 'admin' ], function (){
        Route::post('login',        'SchoolAdminAuthController@login');
        Route::post('logout',       'SchoolAdminAuthController@logout');
        Route::post('refresh',      'SchoolAdminAuthController@refresh');
        Route::post('me',           'SchoolAdminAuthController@me');
    });
});