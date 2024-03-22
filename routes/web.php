<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

/*Route::get('/password/forget', function () {
    return view('for_pass');
});


Route::get('/password/email', function () {
    $user = User();

        //if ($user == request('email') && request('security_ques') == 'Sport')
        if (request('email') == 'bello@gmail.com')
        {
             return redirect()->route('password.updates');
        }

});*/





Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('blogs.profile')->middleware('auth');
Route::get('/profile/edit', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('blogs.edit_profile')->middleware('auth');
Route::put('/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('blogs.update_profile')->middleware('auth');
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create')->middleware('auth');
Route::post('/create/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
Route::get('/my_blogs', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show')->middleware('auth');
Route::delete('/my_blogs/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy')->middleware('auth');
Route::get('/blog_feed', [App\Http\Controllers\BlogController::class, 'showall'])->name('blogs.showall')->middleware('auth');
Route::get('/comment', [App\Http\Controllers\CommentController::class, 'comment'])->name('blogs.comment')->middleware('auth');
Route::post('blog_feed/{postId}/comment', [App\Http\Controllers\CommentController::class, 'store_comment'])->name('blogs.store_comment')->middleware('auth');
Route::get('/comments/{postId}', [App\Http\Controllers\CommentController::class, 'show_comment'])->name('comments.show');
Route::delete('/comments/{comment}', [App\Http\Controllers\CommentController::class, 'destroy_comment'])->name('comments.destroy')->middleware('auth');
Route::get('/password/forget', [App\Http\Controllers\ForgotPassController::class, 'showResetForm'])->name('password.show');
Route::post('/password/new', [App\Http\Controllers\ForgotPassController::class, 'resetPassword'])->name('password.new');
Route::get('/password/create_new', [App\Http\Controllers\ForgotPassController::class, 'showNewPass'])->name('password.new.show');
Route::post('/password/createPass', [App\Http\Controllers\ForgotPassController::class, 'createNewPass'])->name('password.new.create');




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
