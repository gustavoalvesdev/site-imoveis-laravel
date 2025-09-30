<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/{modalidade}', [SiteController::class, 'imoveis']);
