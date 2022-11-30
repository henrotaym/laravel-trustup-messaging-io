<?php
namespace Henrotaym\LaravelTrustupMessagingIo\Models\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Henrotaym\LaravelTrustupMessagingIo\Facades\Package;

/**
 * @var Model $this
 */
trait IsMessagingIoModel
{
    /**
     * Messaging model type.
     */
    public function getTrustupMessagingIoModelType(): string
    {
        /** @var Model $this */
        return Str::slug(str_replace('\\', '-', $this->getMorphClass()));
    }

    /**
     * Messaging model id.
     */
    public function getTrustupMessagingIoModelId(): string
    {
        /** @var Model $this */
        return $this->uuid ??
            $this->id;
    }

    /**
     * Messaging current app key.
     */
    public function getTrustupMessagingIoAppKey(): string
    {
        return Package::getAppKey();
    }

    /**
     * Messaging authenticated user.
     */
    public function getTrustupMessagingIoUserId(): ?int
    {
        $user = auth()->user();

        if (!$user):
            return null;
        endif;

        return $user?->getId() ??
            $user->id;
    }

    /**
     * Messaging conversation api endpoint.
     */
    public function getTrustupMessagingIoConversationApiUrl(): string
    {
        return Package::getApiUrl() .
            "/conversations/{$this->getTrustupMessagingIoAppKey()}/{$this->getTrustupMessagingIoModelType()}/{$this->getTrustupMessagingIoModelId()}?create_if_not_exists=true";
    }
}