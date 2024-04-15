<?php

namespace App\Services\Notification\Providers;

use App\Models\User;
use App\Services\Notification\Providers\Interfaces\Provider;
use GuzzleHttp\Client;

class SmsProvider implements Provider
{
    private $user;
    private $text;

    public function __construct(User $user, String $text)
    {
        $this->user = $user;
        $this->text = $text;
    }

    function send()
    {
        $client = new Client();

        $data = [
            'op' => 'send',
            'message' => $this->text,
            'to' => $this->user->mobile,

        ];
        $data = array_merge($data, config('services.sms.auth'));

        $response = $client->post(config('services.sms.uri'), $data);
        echo $response->getBody();
    }
}
