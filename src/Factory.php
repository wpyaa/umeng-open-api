<?php

namespace Ranj\UmengOpenAPI;

use Ranj\UmengOpenAPI\App\Apptrack;
use Ranj\UmengOpenAPI\App\Uapp;
use Ranj\UmengOpenAPI\App\Umini;

class Factory
{
    public static function umini(array $config)
    {
        return new Umini($config);
    }

    public static function uapp(array $config)
    {
        return new Uapp($config);
    }

    public static function apptrack(array $config)
    {
        return new Apptrack($config);
    }
}