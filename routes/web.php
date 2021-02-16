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
    echo "Selamat Datang";
    });

Route::get('/about', function () {
    echo "Nama : Risang Daniswara<br>NIM : 1941720166";
    });

Route::get('/artikel/{id}', function ($id) {
    echo "Halaman Artikel".$id;
    });


