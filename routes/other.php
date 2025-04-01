<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Other\NotificationController;

Route::resource('/testing/notifications', NotificationController::class)->only(['store', 'update', 'destroy']);
