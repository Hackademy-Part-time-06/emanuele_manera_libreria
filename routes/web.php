<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// index: pagina principale di benvenuto 
Route::get('/', [WelcomeController::class, 'welcomeIndex'])->name('welcome.index'); 

// index: pagina principale mostra tutti i libri  
Route::get('libri', [BookController::class, 'bookIndex'])->name('book.index');
Route::get('libri/crea', [BookController::class, 'bookCreate'])->name('book.create');
Route::post('libri/salva', [BookController::class, 'bookStore'])->name('book.store');
Route::get('libri/{libro}/dettagli', [BookController::class, 'bookShow'])->name('book.show'); 

// index: pagina principale mostra tutte le categorie 
Route::get('categorie', [CategoryController::class, 'categoryIndex'])->name('category.index');
Route::get('categorie/crea', [CategoryController::class, 'categoryCreate'])->name('category.create');
Route::post('categorie/salva', [CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('categorie/{categoria}/dettagli', [CategoryController::class, 'categoryShow'])->name('category.show'); 
