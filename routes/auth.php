<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CategorieControler;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RealCategorieController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
Route::controller(ProductController::class)->group(function(){


    Route::get('products', 'index')
                ->name('products');

    Route::get('new-product',  'create')
                ->name('newproduct');

    Route::post('new-product', 'store')
                ->name('storeproduct');
    Route::get('edit-product/{id}', 'edit')
              ->name('editproduct');
     Route::get('cheecking/{id}', 'update')
              ->name('update');

     Route::DELETE('delete', 'delete')
              ->name('destroy');

            });
   Route::controller(RealCategorieController::class)->group(function(){


              Route::get('/categories', 'index')
                          ->name('categorie');
          
              Route::get('new-categorie',  'create')
                          ->name('newcategorie');
              Route::get('/categorie/{id}', 'destroy')
                  ->name('category.destroy');
              Route::post('storing', 'store')
                          ->name('storecategorie');
              // Route::get('edit-product/{id}', 'edit')
              //           ->name('editproduct');
              //  Route::get('cheecking/{id}', 'update')
              //           ->name('update');
          
              Route::delete('category/{id}', 'destroy')
                        ->name('category.destroy');
          
                      });
      

        

    Route::get('orders', [OrderController::class, 'index'])
                ->name('orders');

    Route::get('orders-review', [OrderController::class, 'review'])
                ->name('orders.review');
    
    Route::get('orders-progress', [OrderController::class, 'progress'])
                ->name('orders.progress');
    
    Route::get('orders-confirmed', [OrderController::class, 'confirmed'])
                ->name('orders.confirmed');

    Route::get('order/{id}', [OrderController::class, 'show'])
                ->name('order.show');
                      
    Route::delete('order-delete/{id}', [OrderController::class, 'destroy'])
                ->name('order.destroy');

    Route::post('order-update/{id}', [OrderController::class, 'update'])
                ->name('order.update');

    Route::post('order-accept/{id}', [OrderController::class, 'accept'])
                ->name('order.accept');

    Route::post('order-confirm/{id}', [OrderController::class, 'confirm'])
                ->name('order.confirm');
                
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
