<?php

use App\Http\Controllers\CompagnyController;
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

Route::get('/', [CompagnyController::class, 'index']);
Route::get('/compagny-show/{id}', [CompagnyController::class, 'show']);
Route::get('/create', [CompagnyController::class, 'create']);
Route::get('/show-compagny/{id}', [CompagnyController::class, 'show']);

Route::post('/delete-compagny/{id}', [CompagnyController::class, 'destroy']);

Route::post('/add-compagny', [CompagnyController::class, 'store']);