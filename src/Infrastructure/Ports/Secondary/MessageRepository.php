<?php

namespace App\Infrastructure\Ports\Secondary;

use YTeissier\Project\Domain\Entity\Message;
use YTeissier\Project\Domain\Gateway\MessageGateway;

/**
 * Class MessageRepository
 * @package App\Infrastructure\Ports\Secondary
 */
class MessageRepository implements MessageGateway
{
    /**
     * @param Message $message
     */
    public function add(Message $message): void
    {
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        return array_fill(0, 10, new Message('Message'));
    }
}