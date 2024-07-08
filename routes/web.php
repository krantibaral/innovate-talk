<?php

use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/blog_details/{id}', [FrontController::class, 'blogDetails'])->name('blog_details');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('blogs', BlogController::class);
    Route::resource('uploader', UploadController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('advertisements', AdvertiseController::class);

});