<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

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

// Home
Route::get('/{name}', function () {
  return view('home');
})->where('name', 'home|');
// Orders
Route::get('/order', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
// Cart
Route::get('/cart', [CartController::class, 'index']);
Route::delete('/cart/{id}', [CartController::class, 'destroy']);
// Menu
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'store']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::get('/menu/{id}', [MenuController::class, 'show']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
// About Page
Route::get('/about', function () {
  return view('about');
});
// Contact Page
Route::get('/contact', function () {
  return view('contact');
});