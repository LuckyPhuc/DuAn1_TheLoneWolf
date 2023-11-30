<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});
// trang products
Route::get('/admin/dashboard/products/list', function () {
    return view('admin/products/index');
});
Route::get('/admin/dashboard/products/create', function () {
    return view('admin/products/product-create');
});
// category
Route::get('/admin/dashboard/categories/list', function () {
    return view('admin/categories/index');
});
Route::get('/admin/dashboard/categories/create', function () {
    return view('admin/categories/categories-create');
});
//order
Route::get('/admin/dashboard/order/index', function () {
    return view('admin/order/index');
});

// userlist
Route::get('/admin/dashboard/People/users/list', function () {
    return view('admin/People/userList');
});
Route::get('/admin/dashboard/People/users/create', function () {
    return view('admin/People/addUsers');

});