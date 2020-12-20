<?php

namespace YTeissier\Project\Domain\Tests;

use PHPUnit\Framework\TestCase;
use YTeissier\Project\Domain\Entity\Message;
use YTeissier\Project\Domain\Gateway\MessageGateway;
use YTeissier\Project\Domain\Presenter\ChatPresenterInterface;
use YTeissier\Project\Domain\Response\ChatResponse;
use YTeissier\Project\Domain\UseCase\Chat;

class ChatTest extends TestCase
{
    /**
     * @var MessageGateway
     */
    private MessageGateway $messageGateway;

    /**
     * @var ChatPresenterInterface
     */
    private ChatPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->messageGateway = new class() implements MessageGateway {

            public function add(Message $message): void
            {
            }

            public function findAll(): array
            {
                return array_fill(0, 10, new Message('Message'));
            }
        };

        $this->presenter = new class() implements ChatPresenterInterface {

            /**
             * @var array
             */
            public array $messages;

            public function present(ChatResponse $chatResponse)
            {
                $this->messages =
                    array_map(fn(Message $message) => $message->getContent(),
                        $chatResponse->getMessages()
                    );
            }
        };
    }

    public function test()
    {
        $chat = new Chat($this->messageGateway);
        $chat->execute($this->presenter);

        $this->assertCount(10, $this->presenter->messages);
    }
}