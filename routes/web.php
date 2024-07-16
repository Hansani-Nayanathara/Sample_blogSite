<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;


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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('tutorials/{category_slug}', [FrontendController::class, 'viewCategoryPost']);
Route::get('tutorials/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost']);



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/category',[CategoryController::class,'index'])->name('index');
    Route::get('/add-category',[CategoryController::class,'create'])->name('create');
    Route::POST('/add-category',[CategoryController::class,'store'])->name('store');
    Route::get('edit-category/{category_id}',[CategoryController::class,'edit'])->name('edit');
    Route::put('/update-category/{category_id}',[CategoryController::class,'update'])->name('update');
    //Route::get('/delete-category/{category_id}',[CategoryController::class,'destroy'])->name('destroy');
    Route::post('/delete-category',[CategoryController::class,'destroy'])->name('destroy');


    Route::get('/posts', [PostController::class, 'index'])->name('index');
    Route::get('/add-posts', [PostController::class, 'create'])->name('create');
    Route::post('/add-posts', [PostController::class, 'store'])->name('store');
    Route::get('/edit-post/{post_id}', [PostController::class, 'edit'])->name('edit');
    Route::put('/update-post/{post_id}', [PostController::class, 'update'])->name('update');
    Route::get('/delete-post/{post_id}', [PostController::class, 'destroy'])->name('destroy');

    Route::get('/users', [UserController::class, 'index'])->name('index');
    Route::get('/edit-users/{users_id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update-user/{users_id}', [UserController::class, 'update'])->name('update');
});

