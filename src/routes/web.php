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
Auth::routes();
Route::get('/','App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->only(['show']); //-- この行を追加
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
