<?php

use Illuminate\Http\Request;
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
Route::post('login', 'API\AuthController@login');
Route::post('signup', 'API\AuthController@signup');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('logout', 'API\AuthController@logout');
    Route::post('updateProfile', 'API\AuthController@update');
    Route::get('user', 'API\AuthController@user');
    Route::get('berita', 'API\BeritaController@index');
    Route::get('berita/{id}', 'API\BeritaController@show');
    Route::post('addBerita', 'API\BeritaController@store');
    Route::post('updateBerita/{id}', 'API\BeritaController@update');
    Route::get('deleteBerita/{id}', 'API\BeritaController@destroy');
    Route::prefix('konsultasi')->group(function () {
        Route::get('room', 'API\KonsultassiController@roomKonsul');
        Route::get('detail/{id}', 'API\KonsultassiController@detailRoom');
        Route::post('create', 'API\KonsultassiController@createKonsul');
    });
});
