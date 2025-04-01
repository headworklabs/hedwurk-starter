<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => Inertia::render('Welcome'))->name('home');
Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/page-1', fn() => Inertia::render('Page1'))->name('page-1');
    Route::get('/page-2', fn() => Inertia::render('Page2'))->name('page-2');
    Route::get('/style-guide', fn() => Inertia::render('style-guide/StyleGuide'))->name('style-guide');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/billing.php';
require __DIR__ . '/other.php';
