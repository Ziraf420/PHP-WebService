<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( uri: '/projects', action: [App\Http\Controllers\ProjectController::class, 'index']);
Route::get( uri: '/projects/{id}', action: [App\Http\Controllers\ProjectController::class, 'deskripsi']);
Route::post( uri: '/komen', action: [App\Http\Controllers\KomentarController::class, 'store']);
Route::get( uri: '/list-komen/{id}', action: [App\Http\Controllers\KomentarController::class, 'index']);