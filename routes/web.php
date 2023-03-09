<?php

use App\Http\Controllers\{
    HomeController,
    PostController
};
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
});

