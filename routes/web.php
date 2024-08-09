<?php

use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\BannerBlogController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;

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
Route::post('/blog/{blogId}/comment', [FrontController::class, 'postComment'])->name('blog.comment');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::post('/contact-submit', [FrontController::class, 'sendEmail'])->name('contact-submit');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('blogs', BlogController::class);
    Route::resource('uploader', UploadController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('advertisements', AdvertiseController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('banner_blogs', BannerBlogController::class);
    Route::resource('users', UserController::class);
    Route::resource('faqs', FAQController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

});