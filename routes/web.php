<?php

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

// Route::get('user/{id}', function ($id) 
// { return 'User '.$id; });

// Route::get('user/{user}/makan/{makan}', function ($user, $makan) 
// { return 'User '.$user. 'makan'.$makan; });

// Route::get('guru','GuruController@halo');

// Route::get('guru/{halo}/{halo2}', 'GuruController@halo2');

// Route::get('guru', 'GuruController@profileguru');
// Route::get('guru/{id}', 'GuruController@profileguru2');
// Route::get('user/halo/good','GuruController@latihan')->name('yan');
// Route::get('user/{id}/{halo}','GuruController@latihan2')->name('berli');

Route::resource('siswa', 'SiswaController');
// Route::get('siswa', 'SiswaController@index')->name('berli');
// Route::get('siswa2', 'SiswaController@index')->name('ana');