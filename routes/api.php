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

// Route::post('/gelombang1',[App\Http\Controllers\gelombang1::class,'simpan']);
Route::post('/gelombang1','Gelombang2Controller@store');
Route::get('/gelombang2','gelombang1controller@simpan');
Route::post('/login', 'admin@login');   
Route::post('/register','RegisterController@storeRegister');
Route::get('/data-gelombang1','Gelombang2Controller@getLastRecord');
Route::get('/data-gelombang2','GelombangDuaController@getLastRecord');
Route::post('/data-diri','DataDiriController@uploadDataDiri');
Route::apiResource('/data','TampilDataDiriController');
Route::post('/post-persyaratan','PersyaratanController@store');
Route::post('/post-nomor','NomorUjianController@store')->name('post-nomor');
Route::post('/bukti-bayar','BuktiTFController@store')->name('bukti-bayar');

