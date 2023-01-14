<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Mail\CommentPosted;


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

/*Route::get('/', function () {
    return view('welcome');
}); */

//using controller


Route::get('/', [HomeController::class, 'index'])->name('welcome.index');

//to get to blog page
Route::get('/blog', [PostController::class, 'index'])->name('post.index');

//store post to database
Route::post('/blog', [PostController::class, 'store'])->name('post.store');


Route::post('/blog/{post:title}', [CommentController::class, 'store'])->name('comment.store');

Route::get('/blog/{post:title}', [CommentController::class, 'show'])->name('comment.show');

//about page
Route::get('/about', function () {
    return view('about');
})->name('about.index');

//to contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/blog/{post:title}', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');

Route::get('/blog/{post:title}', [CommentController::class, 'show'])->name('comment.show');

//view post page
Route::get('/blog/{post:title}', [PostController::class, 'show'])->name('post.show');

Route::get('/dashboard/myposts', [PostController::class, 'showmine'])->name('post.showmine');

//to edit single blog post
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

//to update single blog post
Route::put('/blog/{post}', [PostController::class, 'update'])->name('post.update');

//to delete single blog post
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('post.destroy');

//to create blog post
Route::get('create-new-post', [PostController::class, 'create'])->name('post.create')->middleware('auth');

Route::get('/dashboard/{post:user_id}', [PostController::class, 'showall'])->name('post.showall');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 
require __DIR__ . '/auth.php';
