<?php
namespace Henrotaym\LaravelTrustupMessagingIo\Tests;

use Henrotaym\LaravelTrustupMessagingIo\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Henrotaym\LaravelTrustupMessagingIo\Providers\LaravelTrustupMessagingIoServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupMessagingIoServiceProvider::class
        ];
    }
}