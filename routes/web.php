<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tentang;

Route::get('/', [tentang::class,"index"]);
