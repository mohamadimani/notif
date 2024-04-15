<?php

use App\Http\Controllers\NotificationController;
use App\Mail\loginMail;
use App\Mail\welcomeMail;
use App\Models\User;
use App\Services\Notification\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('notifications/email', [NotificationController::class, 'email'])->name('notification.email');
Route::post('notifications/email', [NotificationController::class, 'sendEmail'])->name('notification.send.email');





// Route::get('welcome', function () {
//     Mail::to('mohamadimahdi@yahoo.com')->send(new welcomeMail);
// });

// Route::get('login', function () {
//     Mail::to('mohamadimahdi@yahoo.com')->send(new loginMail);
// });

// Route::get('email', function () {
//     $notification = resolve(Notification::class);
//     $notification->sendEmail(User::find(1), new loginMail('test'));
// });

Route::get('send-email', function () {
    return view('notifications.send-email');
});

Route::get('sms', function () {
    $notification = resolve(Notification::class);
    $notification->sendSms(User::find(1), 'hi');
});

Route::get('telegram', function () {
    $notification = resolve(Notification::class);
    $notification->sendTelegram(User::find(1), 'hi');
});
