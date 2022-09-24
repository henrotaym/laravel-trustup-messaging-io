<?php
namespace Henrotaym\LaravelTrustupMessagingIo;

use Henrotaym\LaravelTrustupMessagingIo\Contracts\PackageContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class Package extends VersionablePackage implements PackageContract
{
    public static function prefix(): string
    {
        return "laravel_trustup_messaging_io";
    }

    public function getAppKey(): string
    {
        $key = $this->getConfig('messaging.app_key');
        
        return app()->environment('production') ?
            $key
            : "$key-" . app()->environment();
    }

    public function getApiUrl(): string
    {
        return $this->getConfig('messaging.api');
    }
}