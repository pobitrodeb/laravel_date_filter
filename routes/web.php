<?php

use App\Http\Controllers\DateFilterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/filter', [HomeController::class, 'filter']);

// laravel 10
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
