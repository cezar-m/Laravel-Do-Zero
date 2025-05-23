<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;


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

Route::get('/', HomeController::class)->name('site.home');
Route::get('/produtos', [CategoryController::class, 'index'])->name('site.products');
Route::get('/produtos/{slug}', [CategoryController::class, 'form'])->name('site.products.category');
Route::get('/blog', BlogController::class)->name('site.blog');

Route::view('sobre', 'site.about.index')->name('site.about');

Route::get('/contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contato', [ContactController::class, 'index'])->name('site.contact.form');