<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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
    return view('layout.master');
});

Route::get('/logReg', function () {
    return view('logReg.login');
});

Route::get('register', function () {
    return view('logReg.register');
});

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
