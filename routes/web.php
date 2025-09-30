<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::get('/{modalidade}', [SiteController::class, 'imoveis'])->name('imoveis');
