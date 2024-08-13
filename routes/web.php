<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;

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
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/update_level', [LevelController::class, 'update']);
Route::get('/delete_level', [LevelController::class, 'delete']);
Route::get('/display_level', [LevelController::class, 'display']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/update_kategori', [KategoriController::class, 'update']);
Route::get('/display_kategori', [KategoriController::class, 'display']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/update_user', [UserController::class, 'update']);
Route::get('/delete_user', [UserController::class, 'delete']);
Route::get('/insert_user', [UserController::class, 'insert']);

Route::get('/cekobject', [AnggotaController::class, 'cekObject']);
Route::get('/insert', [AnggotaController::class, 'insert']);
Route::get('/update', [AnggotaController::class, 'update']);
Route::get('/delete', [AnggotaController::class, 'delete']);
Route::get('/all', [AnggotaController::class, 'all']);
Route::get('/find', [AnggotaController::class, 'find']);
Route::get('/getWhere', [AnggotaController::class, 'getWhere']);