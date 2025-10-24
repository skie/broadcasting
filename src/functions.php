<?php
declare(strict_types=1);

use Cake\Broadcasting\Broadcasting;
use Cake\Broadcasting\Event\BroadcastableInterface;
use Cake\Broadcasting\PendingBroadcast;

if (!function_exists('broadcast')) {
    /**
     * Begin broadcasting an event.
     *
     * @param \Cake\Broadcasting\Event\BroadcastableInterface $event Event object
     * @return \Cake\Broadcasting\PendingBroadcast
     */
    function broadcast(BroadcastableInterface $event): PendingBroadcast
    {
        return Broadcasting::event($event);
    }
}
