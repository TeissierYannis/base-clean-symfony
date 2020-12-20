<?php

namespace YTeissier\Project\Domain\Request;

/**
 * Class SendRequest
 * @package YTeissier\Project\Domain\Request
 */
class SendRequest
{
    /**
     * @var string
     */
    private string $message;

    /**
     * SendRequest constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}