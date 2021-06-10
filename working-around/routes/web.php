<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Job;
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
Route::get('user/', [UserController::class, 'indexPage'])->name('user.index');

Route::get('user/create', [UserController::class, 'createPage'])->name('user.create'); // route for redirecting to user_create page

Route::post('user/insert', [UserController::class, 'insert'])->name('user.insert'); // route for posting user into the DB

Route::get('user/{user}/edit', [UserController::class, 'editPage'])->name('user.edit');

Route::put('user/{user}/update', [UserController::class, 'update'])->name('user.update'); // route for updating user in the DB

Route::match(['delete', 'get'], 'user/{id}/removew/', [UserController::class, 'removeWorker'])->name('user.removeWorker'); // route for removing the worker from the DB

Route::match(['delete', 'get'], 'user/{id}/removec/', [UserController::class, 'removeClient'])->name('user.removeClient'); // route for removing the client from the DB
/*--------------   Categories routes   ---------------*/

Route::get('categories/', [CategoryController::class, 'indexPage'])->name('categories.index');

Route::get('categories/create', [CategoryController::class, 'createPage'])->name('categories.create');

Route::post('category', [CategoryController::class, 'insert'])->name('categories.insert');

Route::get('categories/{id}', [CategoryController::class, 'showCategory'])->name('categories.show');

Route::get('categories/edit', [CategoryController::class, 'editPage'])->name('categories.edit');



Route::put('categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');

Route::match(['delete', 'get'], 'categories/{category}/delete', [CategoryController::class, 'delete'])->name('categories.delete');

/*--------------   Services routes   ---------------*/
Route::get('categories/{category}/services/', [ServiceController::class, 'indexPage'])->name('services.index');

Route::get('categories/{category}/services/create', [ServiceController::class, 'createPage'])->name('services.create');

Route::post('categories/{category}/service', [ServiceController::class, 'insert'])->name('services.insert');

Route::post('categories/{category}/services/{id}', [ServiceController::class, 'reserve'])->name('services.reserve');


/*--------------   Jobs routes   ---------------*/
Route::get('user/jobs/', [JobController::class, 'indexPage'])->name('jobs.index');

Route::get('user/jobs/{id}', [JobController::class, 'showJob'])->name('job.show');

Route::match(['put', 'get'], 'user/jobs/{id}/accept', [JobController::class, 'acceptService'])->name('job.accept');

Route::match(['put', 'delete'], '/user/jobs/{id}/decline', [JobController::class, 'declineService'])->name('job.decline');

/*-------------------- Home --------------------*/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

