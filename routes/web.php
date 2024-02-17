<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::get('/bloc', function () {
    return view('bloc');
})->name('bloc');

Route::get('/nosaltres', function () {
    return view('nosaltres');
})->name('nosaltres');

Route::get('/contacte', function () {
    return view('contacte');
})->name('contacte');

Route::view('/test','test');

// segueix totes les convencions
Route::resource('posts', postController::class);

// si vols substituir el 404
/* Route::fallback( function () {
    redirect('inici');
}); */