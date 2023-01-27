<?php

use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
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


Route::group(['middleware' => 'guest'], function () {
    Route::get('/beranda', 'BerandaController@index')->name('beranda');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/portofolio', 'PortofolioController@index')->name('portofolio');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/contact', 'ContactController@index')->name('contact');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');

    Route::resource('user', UserController::class)->middleware('auth')->except('show')->middleware('superadmin');

    Route::resource('perusahaan', PerusahaanController::class);

    Route::resource('portofolio', PortofolioController::class);
});
