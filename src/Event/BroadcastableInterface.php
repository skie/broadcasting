<?php
declare(strict_types=1);

namespace Cake\Broadcasting\Event;

use Cake\Broadcasting\Channel\Channel;

/**
 * Broadcastable Interface
 *
 * Defines the contract for events that can be broadcast.
 *
 * @package Cake\Broadcasting\Event
 */
interface BroadcastableInterface
{
    /**
     * Get the event name for broadcasting.
     *
     * @return string
     */
    public function broadcastEvent(): string;

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Cake\Broadcasting\Channel\Channel|array<\Cake\Broadcasting\Channel\Channel>
     */
    public function broadcastChannel(): Channel|array;

    /**
     * Get the socket ID to exclude from receiving the event.
     *
     * @return string|null
     */
    public function broadcastSocket(): ?string;

    /**
     * Get the data to broadcast.
     *
     * @return array<string, mixed>|null
     */
    public function broadcastData(): ?array;
}
