<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


/*--------------   User routes   ---------------*/

// Create index

Route::get('user/create', [UserController::class, 'createPage'])->name('user.create'); // route for redirecting to user_create page

Route::post('user', [UserController::class, 'insert'])->name('user.insert'); // route for posting user into the DB

Route::get('user/{user}/edit', [UserController::class, 'editPage'])->name('user.edit');

Route::put('user/{user}', [UserController::class, 'update'])->name('user.update'); // route for updating user in the DB

Route::delete('user/{user}', [UserController::class, 'remove'])->name('user.remove'); // route for removing the user from the DB

/*--------------   Category routes   ---------------*/
Route::get('category/', [CategoryController::class, 'indexPage'])->name('category.index'); // Category Index

Route::get('category/create', [CategoryController::class, 'createPage'])->name('category.create'); // route for creating form

Route::post('category', [CategoryController::class, 'insert'])->name('category.insert'); // route for posting category into the DB

Route::get('category/{category}/edit', [CategoryController::class, 'editPage'])->name('category.edit'); // route for redirecting to category_edit page

Route::get('category/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::delete('category/{category}', [CategoryController::class, 'delete'])->name('category.delete');
/*-------------------- Home --------------------*/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
