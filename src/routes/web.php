<?php

use App\Models\Models\Teaching_plan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teaching_planController;

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
Route::get('/', [Teaching_planController::class, 'showList'])->name('teaching_plans');
// 教案投稿画面を表示
Route::get('/teaching_plan/create', [Teaching_planController::class, 'showCreate'])->name('create');
// 教案投稿
Route::post('/teaching_plan/store', [Teaching_planController::class, 'exeStore'])->name('store');
// 教案詳細画面を表示
Route::get('/teaching_plan/{id}', [Teaching_planController::class, 'showDetail'])->name('show');
