<?php

namespace App\Services\Notification\Providers;

use App\Services\Notification\Providers\Interfaces\Provider;

class TelegramProvider implements Provider
{
    function send()
    {
        echo 'telegram provider';
    }
}
