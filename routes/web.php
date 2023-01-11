<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


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

Route::get('/', [HomeController::class, 'index']) -> name ('welcome.index');

//to get to blog page
Route::get('/blog', [PostController::class, 'index']) -> name ('post.index');

//store post to database
Route::post('/blog', [PostController::class, 'store']) -> name ('post.store');


Route::post('/blog/{post:title}', [CommentController::Class, 'store']) -> name ('comment.store');

Route::get('/blog/{post:title}', [CommentController::Class, 'show']) -> name ('comment.show');



//about page
Route::get('/about', function(){
    return view('about');
}) -> name ('about.index');

//contact page
Route::get('/contact', [ContactController::class, 'index']) -> name('contact.index');

//view post page
Route::get('/blog/{post:title}', [PostController::class, 'show']) -> name ('post.show');

//create blog post
Route::get('create-new-post', [PostController::class, 'create']) -> name ('post.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
