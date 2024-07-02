<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function viewNotifications()
    {
        $notificationData = Notification::all();
        return response()->json($notificationData);
    }
}
