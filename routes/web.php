<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('demo/sendmail', [App\Http\Controllers\SendMailController::class, 'sendmail']);

Route::get('dashboard', [App\Http\Controllers\DashboardAdminController::class, 'show'])->middleware('auth');

Route::get('admin', [App\Http\Controllers\DashboardAdminController::class, 'show']);

Route::get('admin/user/list', [App\Http\Controllers\AdminUserController::class, 'list']);

Route::get('admin/user/delete/{id}', [App\Http\Controllers\AdminUserController::class, 'delete'])->name('delete_user');

Route::get('admin/user/edit/{id}', [App\Http\Controllers\AdminUserController::class, 'edit'])->name('user.edit');

Route::post('admin/user/update/{id}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('user.update');