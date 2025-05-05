<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tentang;
use App\Http\Controllers\PostingController;

Route::get('/', [tentang::class,"index"]);
Route::get('/unggah', [PostingController::class,"index"]);
