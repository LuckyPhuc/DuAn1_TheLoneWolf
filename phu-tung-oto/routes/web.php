<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\users\HomeController;
use App\Http\Controllers\users\ShopController;
use App\Http\Controllers\users\CheckoutController;

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

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


// Routing product
Route::prefix('admin/products')->name('admin.products.')->group(function () {
    Route::get('list', [ProductController::class, 'index'])->name('list');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('{id}', [ProductController::class, 'show'])->name('show');
    Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
//Routing Categories
Route::prefix('admin/categories')->name('admin.categories.')->group(function () {
    Route::get('list', [CategoriesController::class, 'index'])->name('list');
    Route::get('create', [CategoriesController::class, 'create'])->name('create');
    Route::post('/', [CategoriesController::class, 'store'])->name('store');
    // Route::get('{id}', [CategoriesController::class, 'show'])->name('show');
    Route::get('{id}/edit', [CategoriesController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [CategoriesController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
    // Route::get('list', [CategoriesController::class, 'search'])->name('search');
});
Route::prefix('admin/supplier')->name('admin.supplier.')->group(function () {
    Route::get('list', [SupplierController::class, 'index'])->name('list');
    Route::get('create', [SupplierController::class, 'create'])->name('create');
    Route::post('/', [SupplierController::class, 'store'])->name('store');
    // Route::get('{id}', [SupplierController::class, 'show'])->name('show');
    Route::get('{id}/edit', [SupplierController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [SupplierController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [SupplierController::class, 'destroy'])->name('destroy');
    // Route::get('list', [CategoriesController::class, 'search'])->name('search');
});

//Routing orders
Route::prefix('admin/orders')->name('admin.orders.')->group(function () {
    Route::get('list', [OrderController::class, 'index'])->name('list');
    Route::get('create', [OrderController::class, 'create'])->name('create');
    Route::post('/', [OrderController::class, 'store'])->name('store');
    Route::get('{id}', [OrderController::class, 'show'])->name('show');
    Route::get('{id}/edit', [OrderController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [OrderController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
});

//Routing User
Route::prefix('admin/users')->name('admin.users.')->group(function () {
    Route::get('/list', [UserController::class, 'index'])->name('list');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('{id}', [UserController::class, 'show'])->name('show');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
});
//Routing website
Route::prefix('admin/website')->name('admin.website.')->group(function () {
    Route::get('list', [WebsiteController::class, 'index'])->name('list');
    Route::get('create', [WebsiteController::class, 'create'])->name('create');
    Route::post('/', [WebsiteController::class, 'store'])->name('store');
    Route::get('{id}', [WebsiteController::class, 'show'])->name('show');
    Route::get('{id}/edit', [WebsiteController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [WebsiteController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [WebsiteController::class, 'destroy'])->name('destroy');
});
// nguoi dung
Route::prefix('users')->name('users.')->group(function () {
    Route::get('index', [HomeController::class, 'index'])->name('index');
    Route::get('shop', [ShopController::class, 'index'])->name('shop');
    Route::get('show{id}', [ShopController::class, 'show'])->name('detail');
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('register', [HomeController::class, 'register'])->name('register');
    Route::get('login', [HomeController::class, 'login'])->name('login');
});
