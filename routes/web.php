<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\commentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Una ruta per cada vista */
Route::get('/', function () {
    return view('welcome');
})->name('inici');

Route::get('/nosaltres', function () {
    return view('nosaltres');
})->name('nosaltres');

Route::get('/contacte', function () {
    return view('contacte');
})->name('contacte');


// Posts
Route::resource('posts', postController::class);

// Comments
Route::post('/posts/{post}/comments', [CommentController::class,'store'] )->name('posts.comments.store');
Route::delete('/posts/{post}/comments', [CommentController::class,'destroy'] )->name('posts.comments.destroy');
