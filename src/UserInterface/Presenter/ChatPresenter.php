<?php

namespace App\UserInterface\Presenter;

use App\UserInterface\ViewModel\ChatViewModel;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use YTeissier\Project\Domain\Entity\Message;
use YTeissier\Project\Domain\Presenter\ChatPresenterInterface;
use YTeissier\Project\Domain\Response\ChatResponse;

/**
 * Class ChatPresenter
 * @package App\UserInterface\Presenter
 */
class ChatPresenter implements ChatPresenterInterface
{
    /**
     * @var ChatViewModel
     */
    private ChatViewModel $chatViewModel;

    /**
     * @param ChatResponse $chatResponse
     * @return void
     */
    public function present(ChatResponse $chatResponse)
    {
        $this->chatViewModel = new ChatViewModel(
            array_map(fn(Message $message) =>
            $message->getContent(),
                $chatResponse->getMessages()));
    }

    /**
     * @return ChatViewModel
     */
    public function getChatViewModel(): ChatViewModel
    {
        return $this->chatViewModel;
    }
}