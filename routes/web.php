<?php

use Illuminate\Support\Facades\Route;

    // ============================ IMPORT CLIENT CONTROLLER ============================
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\UserController;
use App\Http\Controllers\client\ProductController;

    // ============================ IMPORT ADMIN CONTROLLER ============================
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ProductsController as AdminProductsController;
use App\Http\Controllers\admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\admin\UsersController as AdminUsersController;
use App\Http\Controllers\admin\AuthController as AdminAuthController;


use Illuminate\Support\Facades\Auth;
    // ============================ client RRR ============================
    // ============================ client RRR ============================
    // ============================ client RRR ============================
    


Route::get('/',                       [HomeController::class, 'index']);
$prefix = 'cart';
Route::prefix($prefix)->group(function () {
Route::get('/',                   [CartController::class, 'cart']);
Route::post('/add/{id}',                   [CartController::class, 'add']);
Route::get('/remove/{id}',                   [CartController::class, 'remove']);
Route::post('/update',                   [CartController::class, 'update']);
});
Route::get('/detail/{id}',            [ProductController::class, 'detail']);
Route::get('/category/{id}',          [ProductController::class, 'category']);
Route::get('/checkout',               [CartController::class, 'checkout']) ;
Route::post('/checkout',               [CartController::class, 'checkoutprocess']) ;
Route::get('/bill/{id}',               [CartController::class, 'billprocess']) ;
Route::get('/profile',               [UserController::class, 'profile']) ;
Route::post('/register',               [UserController::class, 'register']) ;
Route::post('/update',               [UserController::class, 'update']) ;

Route::post('/login',                  [UserController::class, 'login']);
Route::get('/logout',                  [UserController::class, 'logout']);


Route::get('/send',               [CartController::class, 'sendmail']) ;




    // ============================ admin RRR ============================
    // ============================ admin RRR ============================
    // ============================ admin RRR ============================
   
    
    $prefixAdmin = 'admin';
    Route::group(['prefix' => $prefixAdmin,'middleware' => ['web']], function() {
        Route::get('login',                   [AdminAuthController::class, 'login']) -> name('login');
        Route::post('login',                   [AdminAuthController::class, 'checklogin']);
        Route::get('logout',                   [AdminAuthController::class, 'logout']);
        Route::group(['middleware' => ['isAdmin']],(function () {

            Route::get('/',                   [AdminHomeController::class, 'index']) -> name('index')  ;
            // ============================ PRODUCTS ============================
            $prefix = 'products';
            Route::prefix($prefix)->group(function () {
                Route::get('/',                      [AdminProductsController::class,'index']) ;  
                Route::get('/add',                   [AdminProductsController::class,'add']);       
                Route::post('/add',                  [AdminProductsController::class,'create']);     
                Route::get('/edit/{id}',             [AdminProductsController::class,'edit']);  
                Route::post('/edit/{id}',            [AdminProductsController::class,'update']);  
                Route::get('/delete/{id}',           [AdminProductsController::class,'delete']);  
            });
        
            // ============================ CATEGORIES ============================
            $prefix = 'categories';
            Route::prefix($prefix)->group(function () {
                Route::get('/',               [AdminCategoriesController::class,'index']);       
                Route::get('/add',            [AdminCategoriesController::class,'add']);       
                Route::post('/add',            [AdminCategoriesController::class,'create']);       
                Route::get('/edit/{id}',           [AdminCategoriesController::class,'edit']);       
                Route::post('/edit/{id}',           [AdminCategoriesController::class,'update']);  
                Route::get('/delete/{id}',           [AdminCategoriesController::class,'delete']);  
            });
            // ============================ ORDERS ============================
            $prefix = 'orders';
            Route::prefix($prefix)->group(function () {
                Route::get('/',               [AdminOrdersController::class,'index']);       
                Route::get('/edit/{id}',           [AdminOrdersController::class,'edit']);          
                Route::post('/edit/{id}',           [AdminOrdersController::class,'update']);          
                Route::get('/detail/{id}',         [AdminOrdersController::class,'detail']);       
            });
                // ============================ USERS ============================
            $prefix = 'users';
            Route::prefix($prefix)->group(function () {
                Route::get('/',               [AdminUsersController::class,'index']);       
                Route::get('/edit/{id}',           [AdminUsersController::class,'edit']);   
                Route::post('/edit/{id}',           [AdminUsersController::class,'update']);   
            });
        }));
       
    });
  
