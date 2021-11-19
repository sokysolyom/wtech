<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
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
Route::post('/doprava',[MainController::class, 'doprava']);
Route::post('/zhrnutie',[MainController::class, 'zhrnutie']);


Route::post('/stolicky', [CartController::class, 'add_to_cart'])->name('cart.store');
Route::post('/stoly', [CartController::class, 'add_to_cart'])->name('cart.store');
Route::post('/postele', [CartController::class, 'add_to_cart'])->name('cart.store');





Route::get('/',[MainController::class, 'index']);
Route::get('/registracia',[MainController::class, 'register']);
Route::get('/postele',[ProductController::class, 'display_beds']);
Route::get('/postele/{product}',[ProductController::class, 'show_item']);
Route::get('/stoly',[ProductController::class, 'display_tables']);
Route::get('/stoly/{product}',[ProductController::class, 'show_tablshow_iteme']);
Route::get('/stolicky',[ProductController::class, 'display_chairs']);
Route::get('/stolicky/{product}',[ProductController::class, 'show_item']);

Route::get('/products',[ProductController::class, 'display_searched']);
Route::get('/products/{product}',[ProductController::class, 'show_item']);
Route::post('/filter/',[ProductController::class, 'filter']);



require __DIR__.'/auth.php';

