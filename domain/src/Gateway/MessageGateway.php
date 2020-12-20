<?php

namespace YTeissier\Project\Domain\Gateway;

use YTeissier\Project\Domain\Entity\Message;

/**
 * Interface MessageGateway
 * @package YTeissier\Project\Domain\Gateway
 */
interface MessageGateway
{
    /**
     * @param Message $message
     */
    public function add(Message $message): void;

    /**
     * @return Message[]
     */
    public function findAll(): array;
}