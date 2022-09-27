<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BotmanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [MainController::class, 'home']);
Route::resource('/login', LoginController::class);
Route::get('/brands', [MainController::class, 'getCategory']);
Route::get('/car/{id}', [MainController::class, 'getCars'])->name('cars.index');
Route::get('/car-detail/{id}', [MainController::class, 'getCarsDetails'])->name('cars.details');
Route::get('/car-search', [MainController::class, 'search'])->name('cars.search');
Route::get('/cars', [MainController::class, 'cars'])->name('cars');
Route::get('/offers', [MainController::class, 'offers'])->name('offers');
Route::resource('review', ReviewController::class);
Route::resource('booking', BookingController::class);
// Route::get('/botman', [BotmanController::class, 'handle']);
// Route::post('/botman', [BotmanController::class, 'handle']);
Auth::routes();

Route::resource('offer', OfferController::class)->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware('auth');
