<?php

use App\Gelombang1;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotifikasiController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
// Route::get('/login', 'admin@index');
Route::get('/regis', 'admin@regis2');

Route::get('/inputdaftar', 'user@inputdaftar')->name('inputdaftar');
// Route::get('/master','admin@master');
// Route::get('/daftar','admin@daftar')->middleware(['auth']); //test middleware
// Route::get('/admindaftar','admin@admindaftar');









// Route::post('/gelombang1','gelombang1controller@simpan');

Route::get('/login', 'admin@index')->name('login');
// Route::post('/login', 'admin@postLogin1');
Route::post('/postLogin', 'admin@login')->name('pL');
Route::post('/register', 'admin@regis')->name('register');
Route::get('/logout', 'admin@logout')->name('logout');


Route::middleware(['auth', 'CekLevel:admin'])->group(function () {
    Route::get('/daftar', 'admin@daftar');
    Route::get('/tampilPersyaratan', 'admin@tampilPersyaratan');
    Route::get('/tampilPersyaratan/detail/{id}', 'admin@tampilPersyaratanDetail')->name('tampilan-persyaratan-detail');
    Route::get('/tampilOrtu', 'admin@tampilOrtu');
    Route::get('/statusPembayaran', 'user@statusPembayaran');
    Route::get('/kartuUjian', 'user@kartuUjian');
    Route::get('/masteradmin', 'admin@masteradmin');
    Route::post('/gelombang1', 'Gelombang2Controller@store')->name('post-gelombang1');
    Route::post('/gelombang2', 'GelombangDuaController@simpan')->name('post-gelombang2');
    Route::get('/datanilai', 'user@get'); // masih gaje
    Route::get('/datapembayaran', 'admin@datapembayaran')->name('datapembayaran');
    Route::put('/data-pembayaran/{id}', 'admin@update')->name('data-pembayaran.update');
    Route::delete('/data-pembayaran/{id}', 'admin@destroy')->name('data-pembayaran.destroy');
    Route::post('/gelombang1', 'Gelombang2Controller@store')->name('post-gelombang1');
    Route::apiResource('/data-diri', 'TampilDataDiriController');
    Route::resource('/data-daftar-ulang', 'DaftarUlangController')->only(['index', 'update']);
    Route::get('/nilai-total', 'user@get')->name('nilai-total.index');
    Route::post('/nilai-total', 'user@store')->name('nilai-total.store');
    Route::put('/nilai-total/{id}', 'user@update')->name('nilai-total.update');
    Route::delete('/nilai-total/{id}', 'user@destroy')->name('nilai-total.destroy');
    Route::get('/grafik', 'AdminController@grafik');

    Route::resource('/notifikasi', 'NotifikasiController')->only(['index', 'create', 'store', 'delete']);
});

Route::middleware(['auth', 'CekLevel:calon-santri'])->group(function () {
    Route::get('/userhome', 'user@userhome');
    Route::get('/informasi-pendaftaran', 'user@informasiPendaftaran');
    Route::get('/gelombang1', 'user@gelombang1');
    Route::get('/gelombang2', 'user@gelombang2');
    Route::get('/hubungi', 'user@hubungi');

    Route::get('/userdatadaftar', 'user@userdatadaftar')->name('userdatadaftar');
    Route::get('/persyaratan', 'user@persyaratan')->name('persyaratan');
    Route::post('/persyaratan', 'PersyaratanController@store')->name('post-persyaratan');
    Route::get('/nomorujian', 'user@nomorujian');
    Route::post('/post-nomor', 'NomorUjianController@store')->name('post-nomor');
    Route::get('/buktitf', 'user@buktitf')->name('buktitf');
    Route::get('/buktitfulang', 'user@buktitfulang');
    Route::post('/post/buktitfulang', 'tfUlangController@store')->name('post.tfUlang');
    Route::post('/bukti-bayar', 'BuktiTFController@store')->name('bukti-bayar');
    Route::get('/userstatus', 'user@userstatus')->name('userstatus');
    Route::get('/userstatus2', 'user@userstatus2')->name('userstatus2');
    Route::get('/data-ortu', 'DataOrtuController@get')->name('data-ortu');
    Route::get('/statusKelulusan', 'DataDiriController@statusKelulusan')->name('statusKelulusan');
    Route::post('/post-data-ortu', 'DataOrtuController@store')->name('post-ortu');
    Route::post('/data-diri', 'DataDiriController@uploadDataDiri')->name('data-diri');
    Route::get('export-pdf/{id}', 'DataDiriController@exportToPDF')->name('export-pdf');
    // Route::get('/check-payment-proof', 'YourController@checkPaymentProof')->name('check-payment-proof');
    Route::get('/check-payment-proof', 'DataDiriController@checkPaymentProof')->name('check-payment-proof');

    Route::get('/pemberitahuan', 'NotifikasiSantriController@index')->name('pemberitahuan.index');
    Route::put('/pemberitahuan/{notifikasi}', 'NotifikasiSantriController@gantiStatus')->name('pemberitahuan.status');
});

Route::get('/', 'LandingPageController')->name('landingPage');
