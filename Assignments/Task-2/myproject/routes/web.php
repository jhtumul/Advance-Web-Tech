<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomePagesController::class, 'index'])->name('index');
Route::get('/login', [HomePagesController::class, 'login'])->name('login');
Route::get('/contact', [HomePagesController::class, 'contact'])->name('contact');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin_home');

Route::get('/student', [StudentController::class, 'student'])->name('student_home');