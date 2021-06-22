<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactWebController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
 //use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Artikel;

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




    //Praktikum 2 Kelompok Pertemuan 3(view)

    Route::get('/home', function(){
        return view('home');
    });
    Route::get('/contact', function(){
        return view('contact');
    });
    Route::get('/product', function(){
        return view('product');
    });
    Route::get('/about-us', function(){
        return view('about-us');
    });
    Route::get('/news', function(){
        return view('news');
    });
    Route::get('/program', function(){
        return view('program');
    });
   
 
    
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
 
});
Route::get('/', function () {
    return view('welcome');
});

//Artikel
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel.index');
Route::get('/create',[ArtikelController::class,'create'])->name('artikel.create');
Route::resource('artikel', ArtikelController::class);

Route::get('/rating/{artikel}', [ArtikelController::class,'hasil'])->name('artikel.rating');

Route::get('/cari',[ArtikelController::class,'cari'])->name('artikel.cari');
Route::get('/mahasiswa_pdf/{artikel}', [ArtikelController::class, 'cetak_pdf'])->name('artikel.cetak');

//Transaksi Sederhana
Route::get('kasir', 'KasirController@kasir')->name('kasir');
Route::get('view', 'KasirController@view')->name('view');
