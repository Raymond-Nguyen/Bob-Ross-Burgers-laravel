<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/{name}', function () {
  return view('home');
})->where('name', 'home|');

Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'store']);
Route::get('/order', function () {
  return view('order');
});
Route::get('/menu/create', [MenuController::class, 'create']);
Route::get('/menu/{id}', [MenuController::class, 'show']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
