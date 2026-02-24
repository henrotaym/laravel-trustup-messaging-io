# laravel-trustup-messaging-io

## Compatibility

| Laravel | Package |
|---|---|
| 8.x / 9.x | 1.x |
| 12.x | 2.x |

## Installation

```shell
composer require henrotaym/laravel-trustup-messaging-io
```

### .env configuration

Add these information to your `.env` file.

```dotenv
TRUSTUP_MESSAGING_API_URL=
TRUSTUP_MESSAGING_APP_KEY=
```

### Preparing your models morph type (optional).

Define your morph types in an `service provider` like `AppServiceProvider` for example.

```php
use App\Models\YourModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Relation::enforceMorphMap([
            'your-model' => YourModel::class,
        ]);
    }
}
```


### Preparing your models

Your model should look like this

```php
use Henrotaym\LaravelTrustupMessagingIo\Contracts\Models\MessagingIoModelContract;
use Henrotaym\LaravelTrustupMessagingIo\Models\Traits\IsMessagingIoModel;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model implements MessagingIoModelContract
{
    use IsMessagingIoModel;
}
```

### Exposing your model

Your resource exposing your model shoud look like this

```php
use Henrotaym\LaravelTrustupMessagingIo\Http\Resources\MessagingIoModel;
use Illuminate\Http\Request;

class MyResource extends MessagingIoModel
{
    protected function getAttributes(Request $request): array
    {
        // Define your attributes here.
    }
}
```
Your resource will automatically have `trustup_io_messaging` key containing values required to use [Vue messaging package](https://github.com/deegitalbe/vuejs-trustup-io-messaging)
