<?php

namespace YTeissier\Project\Domain\UseCase;

use YTeissier\Project\Domain\Entity\Message;
use YTeissier\Project\Domain\Gateway\MessageGateway;
use YTeissier\Project\Domain\Request\SendRequest;

/**
 * Class Send
 * @package YTeissier\Project\Domain\UseCase
 */
class Send
{
    /**
     * @var MessageGateway
     */
    private MessageGateway $messageGateway;

    /**
     * Send constructor.
     * @param MessageGateway $messageGateway
     */
    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }


    /**
     * @param SendRequest $request
     */
    public function execute(SendRequest $request): void
    {

        $this->messageGateway->add(new Message($request->getMessage()));
    }
}