<?php
namespace Henrotaym\LaravelTrustupMessagingIo\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Henrotaym\LaravelTrustupMessagingIo\Contracts\Models\MessagingIoModelContract;

abstract class MessagingIoModel extends JsonResource
{
    /** @var MessagingIoModelContract */
    public $resource;

    public function toArray($request)
    {
        return [
            ...$this->getAttributes(),
            'trustup_io_messaging' => $this->getMessagingIoAttributes()
        ];
    }

    /** Messaging api attributes to give to VUE package. */
    protected function getMessagingIoAttributes(): array
    {
        return [
            'app_key' => $this->resource->getTrustupMessagingIoAppKey(),
            'app-key' => $this->resource->getTrustupMessagingIoAppKey(),
            'model_type' => $this->resource->getTrustupMessagingIoModelType(),
            'model-type' => $this->resource->getTrustupMessagingIoModelType(),
            'model_id' => $this->resource->getTrustupMessagingIoModelId(),
            'model-id' => $this->resource->getTrustupMessagingIoModelId(),
            'user-id' => $this->resource->getTrustupMessagingIoUserId(),
            'api' => $this->resource->getTrustupMessagingIoConversationApiUrl()
        ];
    }

    /** Getting resource attributes. */
    abstract protected function getAttributes(): array;
}