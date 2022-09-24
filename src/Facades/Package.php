<?php
namespace Henrotaym\LaravelTrustupMessagingIo\Facades;

use Henrotaym\LaravelTrustupMessagingIo\Package as Underlying;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

/** 
 * @method static string getAppKey()
 * @method static string getApiUrl()
 */
class Package extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return Underlying::class;
    }
}