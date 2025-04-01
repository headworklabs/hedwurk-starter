<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/subscription-checkout', function (Request $request) {

    return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
});
