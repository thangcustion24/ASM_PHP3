<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthennicationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\AuthenController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\InfoController;


Route::get('login', [AuthennicationController::class, 'login'])->name('login');
Route::post('login', [AuthennicationController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthennicationController::class, 'logout'])->name('logout');


// Admin
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'checkAdmin'
    ],
    function () {
        // Dashboard
        Route::get('dashboard', [AuthennicationController::class, 'dashboard'])->name('dashboard');

        // Quản lý tài khoản
        Route::group(
            [
                'prefix' => 'users',
                'as' => 'users.'
            ],
            function () {
            //CRUD user
            Route::get('list-User', [UserController::class, 'listUser'])->name('listUser');
            Route::post('add-user', [UserController::class, 'addUser'])->name('addUser');
            Route::delete('delete-user}', [UserController::class, 'deleteUser'])->name('deleteUser');
            Route::get('detail-user', [UserController::class, 'detailUser'])->name('detailUser');
            Route::patch('update-user', [UserController::class, 'updateUser'])->name('updateUser');
        }
        );

        // Quản lý danh mục
        Route::group(
            [
                'prefix' => 'categories',
                'as' => 'categories.'
            ],
            function () {
            //CRUD Category
            Route::get('list-category', [CategoryController::class, 'listCategory'])->name('listCategory');
            Route::post('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
            Route::delete('delete-category}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
            Route::get('detail-category', [CategoryController::class, 'detailCategory'])->name('detailCategory');
            Route::patch('update-category', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        }
        );

        // Quản lý sản phẩm
        Route::group(
            [
                'prefix' => 'products',
                'as' => 'products.'
            ],
            function () {
            //CRUD Product
            Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
            Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
            Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
            Route::delete('delete-product}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
            Route::get('detail-product/{idProduct}', [ProductController::class, 'detailProduct'])->name('detailProduct');
            Route::get('update-product/{idProduct}', [ProductController::class, 'updateProduct'])->name('updateProduct');
            Route::patch('update-product', [ProductController::class, 'updatePatchProduct'])->name('updatePatchProduct');
        }
        );
    }
);

// Client
Route::group(
    [
        'prefix' => 'client',
        'as' => 'client.',
    ],
    function () {
        // Trang chủ
        Route::get('homes', [HomeController::class, 'listProductHome'])->name('listProductHome');

        // Quản lý Đăng ký - đăng nhập client
        Route::group(
            [
                'prefix' => 'authen',
                'as' => 'authen.'
            ],
            function () {
            Route::get('login', [AuthenController::class, 'login'])->name('login');
            Route::post('login', [AuthenController::class, 'postLogin'])->name('postLogin');
            Route::get('logout', [AuthenController::class, 'logout'])->name('logout');
            Route::get('register', [AuthenController::class, 'register'])->name('register');
            Route::post('post-register', [AuthenController::class, 'postRegister'])->name('postRegister');
        }
        );

        // Quản lý trang chủ
        Route::group(
            [
                'prefix' => 'home',
                'as' => 'home.'
            ],
            function () {
            // list product home
            Route::get('all-product', [HomeController::class, 'allProduct'])->name('allProduct');
            // detail product
            Route::get('detail-product', [HomeController::class, 'detailProduct'])->name('detailProduct');
        }
        );

        Route::group([
            'prefix' => 'cart',
            'as' => 'cart.',
            // 'middleware' => 'checkUser'
        ], function() {
            Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
            Route::get('view-cart', [CartController::class, 'viewCart'])->name('viewCart');
            Route::patch('update-cart', [CartController::class, 'updateCart'])->name('updateCart');
            Route::delete('delete-cart', [CartController::class, 'deleteCart'])->name('deleteCart');

            Route::get('info-User', [InfoController::class, 'infoUser'])->name('infoUser');
        });


    }
);
