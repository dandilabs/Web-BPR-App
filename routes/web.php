<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\AjukanController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\JaminanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PengaduanController;

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
    return view('blog');
});

Auth::routes([
    'register' => false,
]);

Route::get('/', 'App\Http\Controllers\BlogController@index');
Route::get('/aset', 'App\Http\Controllers\AsetController@index');
Route::get('/aset-detail/{slug}', 'App\Http\Controllers\AsetController@detail_blog')->name('aset.detail');
Route::get('/list-post','App\Http\Controllers\AsetController@list_blog')->name('aset.list');
Route::get('/list-category/{category}','App\Http\Controllers\AsetController@list_category')->name('aset.category');
Route::get('/cari','App\Http\Controllers\AsetController@cari')->name('aset.cari');

//Kredit
Route::get('/ajukan', 'App\Http\Controllers\AjukanController@index')->name('kredit.ajukan');
Route::post('/proses','App\Http\Controllers\AjukanController@proses');
// Route::resource('/ajukan', AjukanController::class);
Route::get('/kredit-modul', function () {
    return view('kredit.modul');
});
Route::get('/kredit-next', function () {
    return view('kredit.multiguna');
});

//tabungan
Route::get('/tabungan-ku', function () {
    return view('tabungan.tabungan');
});

//deposito
Route::get('/deposito', function () {
    return view('deposito.deposito');
});

//tentang-kami
Route::get('/tentang-kami', function () {
    return view('tentang.kami');
});

//hubungi kami
// Route::get('/hubungi-kami', function () {
//     return view('hubungi.kami');
// });
Route::get('/hubungi', 'App\Http\Controllers\PengaduanController@data')->name('hubungi.kami');
Route::post('/proses_pengaduan','App\Http\Controllers\PengaduanController@proses_pengaduan');
//end hubungi
Route::group(['middleware' => 'auth'], function(){
    //dashboard
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);

    Route::get('/post/tampil_hapus','App\Http\Controllers\PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'App\Http\Controllers\PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'App\Http\Controllers\PostController@kill')->name('post.kill');
    Route::resource('/post', PostController::class);
    Route::resource('/kredit', KreditController::class);
    Route::resource('/jenis', JenisController::class);
    Route::resource('/jaminan', JaminanController::class);
    Route::resource('/pengaduan', PengaduanController::class);
    
    Route::resource('/user', UserController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});