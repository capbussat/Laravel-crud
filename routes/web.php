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

Route::get('/', function () {
    return view('welcome');
})->name('inici');

Route::get('/nosaltres', function () {
    return view('nosaltres');
})->name('nosaltres');

Route::get('/contacte', function () {
    return view('contacte');
})->name('contacte');

Route::view('/test','test');

// segueix totes les convencions
Route::resource('posts', postController::class);

Route::post('/posts/{post}/comments', [CommentController::class,'store'] )->name('posts.comments.store');
Route::delete('/posts/{post}/comments', [CommentController::class,'destroy'] )->name('posts.comments.destroy');

// si vols substituir el 404
/* Route::fallback( function () {
    redirect('inici');
}); */