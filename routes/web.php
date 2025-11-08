<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// হোমপেজ
Route::get('/', [HomeController::class, 'index'])->name('home');





Auth::routes();

// Backend Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ভবিষ্যতে আপনার ব্যাকএন্ডের অন্যান্য সব রুট এই গ্রুপের ভেতরে যোগ করতে পারবেন
    // যেমন: Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});
