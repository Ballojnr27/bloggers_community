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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('blogs.profile')->middleware('auth');
Route::get('/profile/edit', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('blogs.edit_profile')->middleware('auth');
Route::put('/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('blogs.update_profile')->middleware('auth');
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create')->middleware('auth');
Route::post('/create/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
Route::get('/my_blogs', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show')->middleware('auth');
Route::delete('/my_blogs/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy')->middleware('auth');
Route::get('/blog_feed', [App\Http\Controllers\BlogController::class, 'showall'])->name('blogs.showall')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

