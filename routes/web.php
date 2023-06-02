<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/logReg', function () {
    return view('logReg.login');
});

Route::get('register', function () {
    return view('logReg.register');
});


Route::group(['middleware' => ['auth']], function () {
    // Categories
    // C => Create Data
    Route::get('/categories/create', [CategoriesController::class, 'create']);
    Route::post('/categories', [CategoriesController::class, 'store']);

    // R => Read Data
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::get('/categories/{id}', [CategoriesController::class, 'show']);

    //U => Update Data
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
    Route::put('/categories/{id}', [CategoriesController::class, 'update']); // Methode put untuk update

    //D => Delete Data
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);


    // Product
    Route::resource("/product", ProductController::class);

    //Profile
    Route::resource('/profile', ProfileController::class);
    // R => Read Data
    Route::get('/profile/{id}', [ProfileController::class, 'show']);


    //U => Update Data
    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit']);
    Route::put('/profile/{id}', [ProfileController::class, 'update']); // Methode put untuk update
});


Route::get('/donwload-category', PDFController::class . '@DownloadCategory');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
