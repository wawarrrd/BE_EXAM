<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route:: get('/product', [ProductController::class, 'index' ])->name('product.index');

Route:: get('/product/create', [ProductController::class, 'create' ])->name('product.create');
Route:: post('/product', [ProductController::class, 'store' ])->name('product.store');
Route:: get('/product/{product}/edit', [ProductController::class, 'edit' ])->name('product.edit');
Route:: put('/product/{product}/update', [ProductController::class, 'update' ])->name('product.update');

Route:: get('/users', [UsersController::class, 'index' ])->name('users.index');
Route:: get('/users/create', [UsersController::class, 'create' ])->name('users.create');
Route:: post('/users', [UsersController::class, 'store' ])->name('users.store');
Route:: get('/users/{user}/edit', [UsersController::class, 'edit' ])->name('users.edit');
Route:: put('/users/{user}/update', [UsersController::class, 'update' ])->name('users.update');

Route:: get('/categories', [CategoriesController::class, 'index' ])->name('categories.index');
Route:: get('/categories/create', [CategoriesController::class, 'create' ])->name('categories.create');
Route:: post('/categories', [CategoriesController::class, 'store' ])->name('categories.store');
Route:: get('/categories/{category}/edit', [CategoriesController::class, 'edit' ])->name('categories.edit');
Route:: put('/categories/{category}/update', [CategoriesController::class, 'update' ])->name('categories.update');

Route:: get('/dashboard', [DashboardController::class, 'index' ])->name('dashboard.index');