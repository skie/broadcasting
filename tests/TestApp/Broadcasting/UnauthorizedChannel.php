<?php
declare(strict_types=1);

namespace TestApp\Broadcasting;

use Cake\Broadcasting\Channel\ChannelInterface;
use Cake\Datasource\EntityInterface;

class UnauthorizedChannel implements ChannelInterface
{
    public function join(EntityInterface $user, EntityInterface $model): array|bool
    {
        return false;
    }
}
