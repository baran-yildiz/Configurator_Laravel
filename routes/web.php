<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routConf;
use App\Http\Controllers\form;
use App\Http\Controllers\ajaxDatabase;
use App\Http\Controllers\AjaxController;
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

Route::get('/', [routConf::class,'routCon']);

Route::post('/submit', [form::class,'saveData']);

Route::post('/ajax', [AjaxController::class,'index'])->name('ajax');
