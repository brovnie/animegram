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
Auth::routes();

Route::post('follow/{user}',[App\Http\Controllers\FollowsController::class, 'store']);


Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::get('/post/{post}',  [App\Http\Controllers\PostController::class, 'show'] );
Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store']);



Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search.show');
