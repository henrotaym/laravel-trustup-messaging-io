<?php
namespace Henrotaym\LaravelTrustupMessagingIo\Contracts\Models;

interface MessagingIoModelContract
{
    /**
     * Messaging model type.
     */
    public function getTrustupMessagingIoModelType(): string;

    /**
     * Messaging model id.
     */
    public function getTrustupMessagingIoModelId(): string;

    /**
     * Messaging current app key.
     */
    public function getTrustupMessagingIoAppKey(): string;

    /**
     * Messaging authenticated user.
     */
    public function getTrustupMessagingIoUserId(): ?int;

    /**
     * Messaging conversation api endpoint.
     */
    public function getTrustupMessagingIoConversationApiUrl(): string;
}