<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// হোমপেজ
Route::get('/', [HomeController::class, 'index'])->name('home');





Auth::routes();
