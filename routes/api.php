<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'api.', 'namespace' => 'Api'], function () {
    Route::group(
        [
            'prefix' => 'products',
            'as' => 'products.',
            'namespace' => 'Products',
        ],
        function () {
            Route::post('/', 'ProductController@store');
        }
    );
});
