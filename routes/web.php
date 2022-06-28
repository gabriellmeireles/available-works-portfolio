<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TechniqueController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Auth;
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
| AUTH ROUTES
|---------------------------------------------------------------------------
*/
Auth::routes();

/* 
|---------------------------------------------------------------------------
| ARTIST ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::post('/available/artist', [ArtistController::class, 'store'])->name('artist.store')->middleware('auth');
Route::put('/available/artist/{artist?}/update', [ArtistController::class, 'update'])->name('artist.update')->middleware('auth');
Route::delete('/available/artist/{artist?}/delete', [ArtistController::class, 'softDelete'])->name('artist.delete')->middleware('auth');


/* 
|---------------------------------------------------------------------------
| CATEGORY ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
Route::post('/available/category',[CategoryController::class, 'store'])->name('category.store')->middleware('auth');
Route::put('/available/category/{category?}/update',[CategoryController::class, 'update'])->name('category.update')->middleware('auth');
Route::delete('/available/category/{category?}/delete', [CategoryController::class, 'softDelete'])->name('category.delete')->middleware('auth');


/* 
|---------------------------------------------------------------------------
| SERIE ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/artist/{artist?}/series/', [SerieController::class, 'index'])->name('series.index');
Route::post('/available/artist/serie/', [SerieController::class, 'store'])->name('serie.store')->middleware('auth');
Route::put('/available/artist/serie/{serie?}/update', [SerieController::class, 'update'])->name('serie.update')->middleware('auth');
Route::delete('/available/artist/serie/{serie?}/delete', [SerieController::class, 'softDelete'])->name('serie.delete')->middleware('auth');


/* 
|---------------------------------------------------------------------------
| TECHNIQUE ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/techniques', [TechniqueController::class, 'index'])->name('techniques.index')->middleware('auth');
Route::post('/available/technique',[TechniqueController::class, 'store'])->name('technique.store')->middleware('auth');
Route::put('/available/technique/{technique?}/update',[TechniqueController::class, 'update'])->name('technique.update')->middleware('auth');
Route::delete('/available/technique/{technique?}/delete',[TechniqueController::class, 'softDelete'])->name('technique.delete')->middleware('auth');


/* 
|---------------------------------------------------------------------------
| WORK ROUTES
|---------------------------------------------------------------------------
*/
Route::get('/available/artist/serie/{serie?}/works/', [WorkController::class, 'index'])->name('works.index');
Route::post('/available/artist/serie/work/', [WorkController::class, 'store'])->name('work.store')->middleware('auth');
Route::put('/available/artist/serie/work/{work?}/update', [WorkController::class, 'update'])->name('work.update')->middleware('auth');
Route::delete('/available/artist/serie/work/{work?}/delete', [WorkController::class, 'softDelete'])->name('work.delete')->middleware('auth');

