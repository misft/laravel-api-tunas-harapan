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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ada tambahan "/api" didepan url
// akses di localhost:8000/api/hello

Route::get('/hello', 'HelloController@hello');
Route::post('/hello', 'HelloController@hello');

Route::get('buku', 'BukuController@index'); //List Buku
Route::post('buku', 'BukuController@create'); //Buat Buku
Route::get('buku/{id}', 'BukuController@detail'); //Detail Buku
Route::put('buku', 'BukuController@update'); //Update Buku
Route::delete('buku', 'BukuController@delete'); //Delete Buku

Route::post('login', 'UserController@login'); //Login
Route::post('register', 'UserController@register'); //Register

Route::get('keranjang', 'KeranjangController@index');
Route::post('keranjang', 'KeranjangController@tambah');
Route::delete('keranjang', 'KeranjangController@hapus');