<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.login');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/alternatif', 'AlternatifController@index')->name('alternatif');
    Route::post('/alternatif-create', 'AlternatifController@add_alternatif')->name('add_alternatif');
    Route::get('/edit/alternatif/{id}', 'AlternatifController@edit');
    Route::post('/update/alternatif/{id}', 'AlternatifController@ubah');
    Route::get('/delete/alternatif/{id}', 'AlternatifController@delete');
    Route::get('/alternatif/nama_tim/{id}', 'AlternatifController@nama_tim');

    Route::get('add_detail_alternatif/{id}', 'AlternatifController@show_detail');
    Route::post('/add_detail/{alternatif}/create', 'AlternatifController@add_detail')->name('create-detail');

    Route::get('/criteria', 'CriteriaController@index')->name('kriteria');

    Route::get('/assesment', 'AssesmentController@index')->name('penilaian');
    Route::post('/assesment', 'AssesmentController@store')->name('add-penilaian');
    Route::get('/edit/assesment/{assesment}', 'AssesmentController@edit');
    Route::post('/assesment/update/{assesment}', 'AssesmentController@update');
    Route::get('/delete/assesment/{assesment}', 'AssesmentController@destroy');

    Route::get('/saw', 'MetodeController@index')->name('saw');

});


