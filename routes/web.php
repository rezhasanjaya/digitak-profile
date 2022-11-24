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

Route::get('/welcome', function () {
    return view('welcome');
});

<<<<<<< HEAD
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/portofolio', 'PortofolioController@index')->name('portofolio');
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
    Route::resource('user', UserController::class);
    Route::get('/about', function () {
        return view('about');
    })->name('about');
=======
Route::middleware('auth')->group(function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/profile', 'ProfileController@index')->name('profile');
  Route::put('/profile', 'ProfileController@update')->name('profile.update');

  Route::get('/about', function () {
      return view('about');
  })->name('about');

  Route::resource('user', UserController::class);
  Route::resource('magang', MagangController::class);
  Route::get('/magang/skill', 'MagangController@skill')->name('magang.skill');
>>>>>>> c93b9504a565b69cbe0edcdfacefec45b032891a
});
