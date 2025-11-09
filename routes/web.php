<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// হোমপেজ
Route::get('/', [HomeController::class, 'index'])->name('home');







// Backend Routes
Route::middleware(['auth', 'is_admin'])->group(function () {
    // অ্যাডমিন ড্যাশবোর্ডের জন্য একটি রুট (পরে এটিকে মিডলওয়্যার দিয়ে সুরক্ষিত করব)
    Route::get('/admin/dashboard', function () {
        return view('backend.dashboard'); // আপনার অ্যাডমিন ড্যাশবোর্ড ভিউ
    })->name('admin.dashboard');

    // ভবিষ্যতে আপনার ব্যাকএন্ডের অন্যান্য সব রুট এই গ্রুপের ভেতরে যোগ করতে পারবেন
    // যেমন: Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('auth.admin-login');
    })->name('admin.login');
});





Auth::routes(['verify' => true]);
