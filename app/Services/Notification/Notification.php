<?php

namespace  App\Services\Notification;

use App\Services\Notification\Providers\Interfaces\Provider;

class Notification
{
    public function __call($name, $arguments)
    {
        $providerPath = __NAMESPACE__ . '\Providers\\' . substr($name, 4) . 'Provider';

        if (!class_exists($providerPath)) {
            throw new \Exception("Class dosn't exist");
        }
        $provider =  new $providerPath(...$arguments);
        if (!is_subclass_of($provider, Provider::class)) {
            throw new \Exception("class must implements App\Services\Notification\Providers\Contracts\Provider");
        }
        return $provider->send();
    }
}
