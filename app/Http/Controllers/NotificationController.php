<?php

namespace App\Http\Controllers;

use App\Mail\loginMail;
use App\Models\User;
use App\Services\Notification\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function email()
    {
        $users = User::all();
        return view('notifications.send-email', compact('users'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            // 'user' => 'integer | exists:users,id',
            'to' => 'email  ',
            'text' => 'string | min:5',
        ]);


        try {
            $notification = new Notification();
            $notification->sendEmail(User::find(2), new loginMail($request->text));
            return redirect()->back()->with('success_email', 'successfuly email sent');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger_email', '  can`t send email');
        }
    }
}
