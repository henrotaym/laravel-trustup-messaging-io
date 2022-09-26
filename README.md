# laravel-trustup-messaging-io

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

class MyResource extends MessagingIoModel
{
    protected function getAttributes(): array
    {
        // Define your attributes here.
    }
}
```
Your resource will automatically have `trustup_io_messaging` key containing values required to use [Vue messaging package](https://github.com/deegitalbe/vuejs-trustup-io-messaging)
