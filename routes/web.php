<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::get('/', [ProductController2::class, 'index']);
Route::get('/products', [ProductController2::class, 'showProducts']);
Route::get('/details/{id}', [ProductController2::class, 'details']);

Route::get('/register', [CustomerController::class, 'register']);
Route::post('/register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::get('/login', [CustomerController::class, 'login']);
Route::post('/login-process', [CustomerController::class, 'loginProcess'])->name('login-process');
Route::get('/logout', [CustomerController::class, 'logout']);

Route::get('/registerAdmin', [AdminController::class, 'register']);
Route::post('/registerAdmin-process', [AdminController::class, 'registerAdminProcess'])->name('registerAdmin-process');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin']);
Route::post('/loginAdmin-process', [AdminController::class, 'loginAdminProcess'])->name('loginAdmin-process');
Route::get('/logoutAdmin', [AdminController::class, 'logoutAdmin']);
Route::get('listAdmin', [AdminController::class, 'listAdmin']);
