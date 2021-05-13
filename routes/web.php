<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () { return view('welcome'); })->name('/');

Route::get('/auth', [PageController::class, 'getAuth'])->name('auth');
Route::get('/sign', [PageController::class, 'getSign']);
Route::get('/token', [PageController::class, 'getToken'])->name('token');

Route::post('/authUser', [UserController::class, 'Auth']);
Route::post('/signUser', [UserController::class, 'Sign']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/setToken', [UserController::class, 'setToken']);
