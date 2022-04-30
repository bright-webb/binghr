<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/edit/{user}', [HomeController::class, 'edit']);
Route::get('/data', [HomeController::class, 'data']);

//Handle post requests
Route::post('/post/update-user', [PostController::class, 'update_user']);
Route::post('/post/add-user', [PostController::class, 'add_user']);
Route::post('/post/delete', [PostController::class, 'delete']);
