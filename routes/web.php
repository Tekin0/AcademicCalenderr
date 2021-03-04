<?php

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

Route::post('/index',[\App\Http\Controllers\CalendarController::class,'updateInfo'])->name('calendar_index');
Route::post('/index',[\App\Http\Controllers\CalendarController::class,'ind'])->name('calendar_index');
Route::get('/',[\App\Http\Controllers\CalendarController::class,'index'])->name('home');
Route::get('/getCalendar' , [\App\Http\Controllers\CalendarController::class, 'getCalendar']);
