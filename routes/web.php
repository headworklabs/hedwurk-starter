<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => Inertia::render('Welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/style-guide', fn() => Inertia::render('style-guide/StyleGuide'))->name('style-guide');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
