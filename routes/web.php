<?php


use App\Http\Controllers\Auth\RegisteredUserController;
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
    return view('main.index');
})->name('index');


Route::prefix('admin')->group(function () {
    Route::namespace('App\Http\Controllers\Admin\Profile')->group(function () {
        Route::get('/profiles', 'IndexController')->name('admin.profiles.index');
    });
    Route::namespace('App\Http\Controllers\Admin\Product')->group(function () {
        Route::get('/products', 'IndexController')->name('admin.products.index');
        Route::get('/products/create', 'CreateController')->name('admin.products.create');
        Route::post('/products', 'StoreController')->name('admin.products.store');
        Route::get('/products/{product}', 'ShowController')->name('admin.products.show');
        Route::get('/products/{product}/edit', 'EditController')->name('admin.products.edit');
        Route::patch('/products/{product}', 'UpdateController')->name('admin.products.update');
        Route::delete('/products/{product}', 'DeleteController')->name('admin.products.destroy');
    });

    Route::namespace('App\Http\Controllers\Admin\Order')->group(function () {
        Route::get('/orders', 'IndexController')->name('admin.orders.index');
    });
});


Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin');

Route::get('/dashboard', [RegisteredUserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
