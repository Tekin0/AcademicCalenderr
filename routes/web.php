<?php

use App\Http\Controllers\CalendarController;
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
Route::post('/index',[CalendarController::class,'ind'])->name('calendar_index');

Route::get('/listData/{category}/{period}',[CalendarController::class,'listData'])->name('listData');

//Route::get('/list',[CalendarController::class,'list'])->name('list');

Route::get('/',[CalendarController::class,'index'])->name('home');
Route::get('/getCalendar' , [CalendarController::class, 'getCalendar']);
