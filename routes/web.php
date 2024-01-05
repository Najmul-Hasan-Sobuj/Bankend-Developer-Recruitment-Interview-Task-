<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'categoryCreate'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'categoryStore'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'categoryEdit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'categoryUpdate'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'categoryDestroy'])->name('categories.destroy');

Route::get('sub/categories/create', [CategoryController::class, 'subCategoryCreate'])->name('sub.categories.create');
Route::post('sub/categories', [CategoryController::class, 'subCategoryStore'])->name('sub.categories.store');
Route::get('sub/categories/{id}/edit', [CategoryController::class, 'subCategoryEdit'])->name('sub.categories.edit');
Route::put('sub/categories/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('sub.categories.update');
Route::delete('sub/categories/{id}', [CategoryController::class, 'subCategoryDestroy'])->name('sub.categories.destroy');

Route::get('/get-subcategories', [CategoryController::class, 'getSubCategories'])->name('get-subcategories');

Route::resource('products', ProductController::class);



