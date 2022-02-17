<?php

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
    return view('welcome');
});

route::get('/about',function(){
    return 'Halaman About';
});
route::get('/karyawan','karyawancontroller@index');
route::post('/karyawan/create','karyawancontroller@create');
route::get('/karyawan/{id}/edit','karyawancontroller@edit');
route::post('/karyawan/{id}/update','karyawancontroller@update');
route::get('/karyawan/{id}/delete','karyawancontroller@delete');

