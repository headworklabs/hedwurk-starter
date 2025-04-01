<?php

namespace App\Http\Controllers\Testing;

use App\Http\Controllers\Controller;
use App\Notifications\WelcomeNotification;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function store()
    {
        request()->user()->notify(new WelcomeNotification);
    }

    public function update(DatabaseNotification $notification)
    {
        $notification->markAsRead();

        return back();
    }

    public function destroy(DatabaseNotification $notification)
    {
        $notification->delete();

        return back();
    }
}
