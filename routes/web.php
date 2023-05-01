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

Route::namespace('App\Http\Controllers\Main')->group(function (){
    Route::get('/','IndexController')->name('index');
    Route::get('/{product}','ShowController')->name('main.show');
});



Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::get('/admin', function () {
        return view('layouts.admin');
    })->name('admin');

    Route::namespace('App\Http\Controllers\Admin\Profile')->group(function () {
        Route::get('/profiles', 'IndexController')->name('admin.profiles.index');
        Route::get('/profiles/{profile}', 'ShowController')->name('admin.profiles.show');
        Route::get('/profiles/{profile}/edit', 'EditController')->name('admin.profiles.edit');
        Route::patch('/profiles/{profile}', 'UpdateController')->name('admin.profiles.update');
        Route::delete('/profiles/{profile}', 'DeleteController')->name('admin.profiles.destroy');
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

    Route::namespace('App\Http\Controllers\Admin\OrderProduct')->group(function () {
        Route::get('/orders', 'IndexController')->name('admin.orders.index');
        Route::get('/orders/{orderProduct}/edit', 'EditController')->name('admin.orders.edit');
        Route::patch('/orders/{orderProduct}', 'UpdateController')->name('admin.orders.update');
    });
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
