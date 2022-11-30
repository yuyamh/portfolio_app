<?php

use App\Models\Models\Teaching_plan;
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

// 教案一覧画面を表示
Route::get('/', 'Teaching_planController@showList')->name('teaching_plans');
