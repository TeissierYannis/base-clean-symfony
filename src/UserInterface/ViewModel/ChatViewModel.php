<?php

namespace App\UserInterface\ViewModel;

/**
 * Class ChatViewModel
 * @package App\UserInterface\ViewModel
 */
class ChatViewModel
{
    /**
     * @var string[]
     */
    private array $messages = [];

    /**
     * ChatViewModel constructor.
     * @param string[] $messages
     */
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return string[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}