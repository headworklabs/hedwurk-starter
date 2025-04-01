<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testing\NotificationController;

Route::resource('/testing/notifications', NotificationController::class)->only(['store', 'update', 'destroy']);
