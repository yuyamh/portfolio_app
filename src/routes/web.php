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
