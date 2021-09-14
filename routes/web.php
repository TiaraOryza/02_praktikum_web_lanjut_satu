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

//Praktikum 1 : Routing Web Framework Laravel

//1. Menampilkan pesan Selamat Datang

Route::get('/', function () {
    return 'SELAMAT DATANG ';
});

//2. Menampilkan NIM dan Nama

Route::get('/about', function () {
    return ' NAMA : TIARA ORYZA SATIVA <br> NIM : 2031710014 ';
});

//3. Menampilkan output dengan parameters

Route::get('/articles/{id}',function($id){
    return 'Halaman Artikel Dengan id : '.$id;
});

