<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TechniqueController;
use App\Http\Controllers\WorkController;
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

Route::get('/', function () {
    return view('available.index');
});

/* 
|---------------------------------------------------------------------------
| ARTIST ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/artists', [ArtistController::class, 'index'])->name('artists.index');


/* 
|---------------------------------------------------------------------------
| TECHNIQUE ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/techniques', [TechniqueController::class, 'index'])->name('techniques.index');


/* 
|---------------------------------------------------------------------------
| CATEGORY ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/categories/', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/available/category',[CategoryController::class, 'store'])->name('category.store');
Route::put('/available/category/update/{category}',[CategoryController::class, 'update'])->name('category.update');

/* 
|---------------------------------------------------------------------------
| SERIE ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/series', [SerieController::class, 'index'])->name('series.index');

/* 
|---------------------------------------------------------------------------
| WORK ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/works', [WorkController::class, 'index'])->name('work.index');

