<?php

use App\Http\Controllers\Post\{CreateController, IndexController, ShowController, StoreController};
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/posts', IndexController::class)->name('posts.index');
Route::get('/posts/{post}', ShowController::class)->name('posts.show');
Route::get('/post/create', CreateController::class)->name('posts.create');
Route::post('/posts', StoreController::class)->name('posts.store');
