<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    
});

Route::get('/kosik',[CartController::class, 'kosik']);
Route::post('/kosik',[CartController::class, 'delete_item'])->name('cart.delete.item');
Route::post('/kosik/update',[CartController::class, 'update_kosik']);

// Route::get('/dashboard', function () {
//    return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/adresa',[MainController::class, 'adress']);
Route::post('/doprava',[OrderController::class, 'doprava']);
Route::get('/doprava',[MainController::class, 'doprava_back']);
Route::post('/zhrnutie',[MainController::class, 'zhrnutie']);


Route::post('/adresa',[OrderController::class, 'create_order'])->name('order.create');
Route::post('/kosik',[CartController::class, 'delete_item'])->name('cart.delete.item');

Route::post('/stolicky', [CartController::class, 'add_to_cart'])->name('cart.store');
Route::post('/stoly', [CartController::class, 'add_to_cart'])->name('cart.store');
Route::post('/postele', [CartController::class, 'add_to_cart'])->name('cart.store');





Route::get('/',[MainController::class, 'index']);
Route::get('/registracia',[MainController::class, 'register']);
Route::get('/postele',[ProductController::class, 'display_beds']);
Route::get('/postele/{product}',[ProductController::class, 'show_item']);
Route::post('/postele/filter/',[ProductController::class, 'beds_filter']);
Route::get('/stoly',[ProductController::class, 'display_tables']);
Route::get('/stoly/{product}',[ProductController::class, 'show_item']);
Route::post('/stoly/filter/',[ProductController::class, 'tables_filter']);
Route::get('/stolicky',[ProductController::class, 'display_chairs']);
Route::get('/stolicky/{product}',[ProductController::class, 'show_item']);
Route::post('/stolicky/filter/',[ProductController::class, 'chairs_filter']);

Route::get('/products',[ProductController::class, 'display_searched']);
Route::post('/products/{product}',[ProductController::class, 'post_recension']);
Route::get('/products/{product}',[ProductController::class, 'show_item']);
Route::post('/products/filter/',[ProductController::class, 'filter']);



require __DIR__.'/auth.php';

