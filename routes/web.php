<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', function () {
    return redirect('/login');
});
// Route::get('/register', function () {
//     return view('auth.register');
// });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/access/block', 'BlockController@index');
Route::post('daftar', 'Dashboard\UserController@daftar');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/homes/index', 'Dashboard\HomeController@index');
    Route::delete('/homes/index/{id}', 'Dashboard\HomeController@delete');
    Route::get('/settings/profile/', 'Dashboard\SettingController@profile');
    Route::put('/settings/profile/{id}', 'Dashboard\SettingController@updateprofile');
    Route::get('/settings/password/', 'Dashboard\SettingController@password');
    Route::put('/settings/password/{id}', 'Dashboard\SettingController@updatepassword');
    Route::resource('/settings/general', 'Dashboard\GeneralController');
    Route::resource('/managements/menu', 'Dashboard\MenuController');
    Route::resource('/managements/submenu', 'Dashboard\SubmenuController');
    Route::resource('/managements/role', 'Dashboard\RolemenuController');
    Route::resource('/users/index', 'Dashboard\UserController');
    Route::resource('/datakk/data', 'Dashboard\DataKKController');
    Route::resource('/datakk/anggota', 'Dashboard\AnggotaKeluargaController');
    Route::resource('/master/agama', 'Dashboard\AgamaController');
    Route::resource('/master/jenis_usaha', 'Dashboard\UsahaController');
    Route::resource('/master/penghasilan', 'Dashboard\PenghasilanController');
    Route::resource('/master/pekerjaan', 'Dashboard\PekerjaanController');
    Route::resource('/master/pendidikan', 'Dashboard\PendidikanController');
    Route::resource('/master/golongan-darah', 'Dashboard\GolonganDarahController');
    Route::resource('/master/ternak', 'Dashboard\TernakController');
    Route::resource('/surat/form', 'Dashboard\FormsController');
    Route::resource('/surat/data', 'Dashboard\SuratController');
    Route::resource('/surat/format', 'Dashboard\FormSuratController');
    Route::resource('/surat/form-surat', 'Dashboard\FormSuratController');
    Route::resource('/pengajuan/warga', 'Dashboard\PengajuanWargaController');
    Route::resource('/pengajuan/surat', 'Dashboard\PengajuanSuratController');
    Route::resource('/nakes/data', 'Dashboard\NakesController');
});
