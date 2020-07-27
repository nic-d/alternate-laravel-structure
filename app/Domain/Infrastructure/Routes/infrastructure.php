<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| INFRASTRUCTURE Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# public
Route::group(['middleware' => ['api']], function () {

});

# public - resolve.project
Route::group(['middleware' => ['api', 'resolve.optional.project']], function () {

});

# auth
Route::group(['middleware' => ['api', 'auth:api']], function () {


});
