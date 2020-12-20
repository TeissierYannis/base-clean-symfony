<?php

namespace YTeissier\Project\Domain\UseCase;

use YTeissier\Project\Domain\Gateway\MessageGateway;
use YTeissier\Project\Domain\Presenter\ChatPresenterInterface;
use YTeissier\Project\Domain\Response\ChatResponse;

/**
 * Class ChatViewModel
 * @package YTeissier\Project\Domain\UseCase
 */
class Chat
{
    /**
     * @var MessageGateway
     */
    private MessageGateway $messageGateway;

    /**
     * Chat constructor.
     * @param MessageGateway $messageGateway
     */
    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    /**
     * @param ChatPresenterInterface $chatPresenter
     * @return void
     */
    public function execute(ChatPresenterInterface $chatPresenter): void
    {
        $chatPresenter->present(new ChatResponse($this->messageGateway->findAll()));
    }
}