<?php

namespace YTeissier\Project\Domain\Response;

use YTeissier\Project\Domain\Entity\Message;

/**
 * Class ChatResponse
 * @package YTeissier\Project\Domain\Response
 */
class ChatResponse
{
    /**
     * @var Message[]
     */
    private array $messages = [];

    /**
     * ChatResponse constructor.
     * @param array $messages
     */
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return Message[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}