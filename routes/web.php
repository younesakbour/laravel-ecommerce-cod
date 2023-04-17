<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategorieControler;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LiveSearch;
use App\Http\Controllers\ProductsController;



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

Route::get('/', [CartsController::class, 'index']);
Route::get('cart', [CartsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartsController::class, 'remove'])->name('remove_from_cart');
Route::get('/destroy', [CartsController::class, 'removeAll'])->name('delete');

Route::prefix('shop')->group(function(){

    Route::get('', [FrontendController::class, 'index'])->name("shop");
    Route::get('/{id}', [FrontendController::class,'show'])->name("single");
    
    

});

Route::get('/categorie/{cat}', [CategorieControler::class, 'nichan_c'])->name('nichan_c');
Route::get('/categorie/{category}', [CategorieControler::class, 'categorie'])->name('category');




Route::post('/redirect-to', [CommandeController::class, 'store'])->name('store');

Route::get('/make-commande', [CommandeController::class, 'index'])->name('make_commande');


Route::get('/about', [ProductsController::class, 'index'])->name("about");

Route::get('/not-found',function(){
  return view('user.ff.shop',['all'=>0]);
});



Route::get('/live_search', [LiveSearch::class,'index']);
Route::get('/live_search/action', [LiveSearch::class,'action'])->name('live_search.action');

Route::get('/dashboard', [ProfileController::class, 'dashboard']
)->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
