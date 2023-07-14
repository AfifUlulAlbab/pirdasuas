<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pintu_controller;

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

Route::get('/', [pintu_controller::class, 'tampilData']);
Route::get('/get-data', [pintu_controller::class, 'showRecentStatus'])->name('getData');