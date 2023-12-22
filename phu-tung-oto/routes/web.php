<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController as ControllersCartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashbardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\users\HomeController;
use App\Http\Controllers\users\ShopController;
use App\Http\Controllers\users\CheckoutController;
use App\Http\Controllers\users\CartController;
use App\Http\Controllers\users\postController;
use App\Http\Controllers\users\LoginController;
use App\Http\Controllers\users\RegisterController;

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


// Route::get('admin/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth', 'CheckAdminRole'])->name('dashboard');

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

Route::prefix('admin')->middleware('auth', 'CheckAdminRole')->name('admin.')->group(function () {

    // Routing dashboard
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashbardController::class, 'index'])->name('index');
    });

    // Routing product
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('list');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('{id}', [ProductController::class, 'show'])->name('show');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::post('list', [ProductController::class, 'search'])->name('search');
    });
    //Routing Categories
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('list', [CategoriesController::class, 'index'])->name('list');
        Route::get('create', [CategoriesController::class, 'create'])->name('create');
        Route::post('/', [CategoriesController::class, 'store'])->name('store');
        // Route::get('{id}', [CategoriesController::class, 'show'])->name('show');
        Route::get('{id}/edit', [CategoriesController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [CategoriesController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
        Route::post('list', [CategoriesController::class, 'search'])->name('search');
    });
    Route::prefix('supplier')->name('supplier.')->group(function () {
        Route::get('list', [SupplierController::class, 'index'])->name('list');
        Route::get('create', [SupplierController::class, 'create'])->name('create');
        Route::post('/', [SupplierController::class, 'store'])->name('store');
        // Route::get('{id}', [SupplierController::class, 'show'])->name('show');
        Route::get('{id}/edit', [SupplierController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [SupplierController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [SupplierController::class, 'destroy'])->name('destroy');
        Route::post('list', [SupplierController::class, 'search'])->name('search');
    });

    //Routing orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('list', [OrderController::class, 'index'])->name('list');
        Route::get('create', [OrderController::class, 'create'])->name('create');
        Route::post('/', [OrderController::class, 'store'])->name('store');
        Route::get('{id}', [OrderController::class, 'show'])->name('show');
        Route::get('{id}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
    });
    //Routing Posts

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('list', [PostsController::class, 'index'])->name('list');
        Route::get('create', [PostsController::class, 'create'])->name('create');
        Route::post('/', [PostsController::class, 'store'])->name('store');
        Route::get('{id}', [PostsController::class, 'show'])->name('show');
        Route::get('{id}/edit', [PostsController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PostsController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [PostsController::class, 'destroy'])->name('destroy');
    });

    //Routing User
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/list', [UserController::class, 'index'])->name('list');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('{id}', [UserController::class, 'show'])->name('show');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::post('list', [UserController::class, 'search'])->name('search');
    });

    // Route::get('demo/sendmail', [MailController::class, 'sendmail']);
    //Routing website
    // Route::prefix('admin/website')->name('admin.website.')->group(function () {
    //     Route::get('list', [WebsiteController::class, 'index'])->name('list');
    //     Route::get('/create', [WebsiteController::class, 'create'])->name('create');
    //     Route::post('/', [WebsiteController::class, 'store'])->name('store');
    //     Route::get('{id}', [WebsiteController::class, 'show'])->name('show');
    //     Route::get('{id}/edit', [WebsiteController::class, 'edit'])->name('edit');
    //     Route::put('update/{id}', [WebsiteController::class, 'update'])->name('update');
    //     Route::delete('delete/{id}', [WebsiteController::class, 'destroy'])->name('destroy');
    // });

});


/*
|--------------------------------------------------------------------------
| user Routes
|--------------------------------------------------------------------------
*/
// nguoi dung (user)
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('shop/{category}', [HomeController::class, 'showProductsByCategory'])->name('shop');
Route::get('shop?{supplier}', [ShopController::class, 'showProductsBySupplier'])->name('shop.supplier');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('shop/category/{category}', [ShopController::class, 'showProductsByCategory'])->name('showProducts');
Route::get('shop/suppliers/{supplier}', [ShopController::class, 'showsuppliers'])->name('showsuppliers');
Route::get('show/{id}', [ShopController::class, 'show'])->name('detail');
route::post('shop/show', [ShopController::class, 'locProducts'])->name('locProducts');
Route::post('shop/search', [ShopController::class, 'search'])->name('search');


Route::prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('list');
    Route::get('/a}', [CheckoutController::class, 'order_id'])->name('orders');
    Route::post('/', [CheckoutController::class, 'checkout'])->name('checkouts');
});

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('posts', [postController::class, 'Posts'])->name('posts');
Route::get('show/posts/{id}', [postController::class, 'ShowPosts'])->name('posts.show');

// cart
Route::prefix('cart')->middleware('auth')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'cart'])->name('list');
    Route::delete('/delete/{id}', [CartController::class, 'deleteCartItem'])->name('delete');
    Route::post('add/{productId}/{quantity}', [CartController::class, 'addCart'])
        ->name('add');
    Route::post('update', [CartController::class, 'updateCartItem'])->name('update');
});

Route::get('invoice', [MailController::class, 'show'])->name('show');