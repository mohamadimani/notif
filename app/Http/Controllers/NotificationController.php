<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function email()
    {
        return view('notification.send-email');
    }
}
