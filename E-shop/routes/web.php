<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/kosik',[MainController::class, 'kosik']);
    Route::get('/1/zhrnutie',[MainController::class, 'zhrnutie']);
    Route::get('/1/doprava',[MainController::class, 'doprava']);
    Route::get('/1/adresa',[MainController::class, 'adress']);
});

// Route::get('/dashboard', function () {
//    return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/',[MainController::class, 'index']);
Route::get('/registracia',[MainController::class, 'register']);
Route::get('/postele',[ProductController::class, 'display_beds']);
Route::get('/postele/{product}',[ProductController::class, 'show_bed']);
Route::get('/stoly',[ProductController::class, 'display_tables']);
Route::get('/stoly/{product}',[ProductController::class, 'show_table']);
Route::get('/stolicky',[ProductController::class, 'display_chairs']);
Route::get('/stolicky/{product}',[ProductController::class, 'show_chair']);



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');




require __DIR__.'/auth.php';

