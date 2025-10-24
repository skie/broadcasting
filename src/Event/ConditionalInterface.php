<?php
declare(strict_types=1);

namespace Cake\Broadcasting\Event;

/**
 * Conditional Interface
 *
 * Defines the contract for events that can be broadcast.
 *
 * @package Cake\Broadcasting\Event
 */
interface ConditionalInterface
{
    /**
     * Determine if this event should broadcast.
     *
     * @return bool
     */
    public function broadcastWhen(): bool;
}
