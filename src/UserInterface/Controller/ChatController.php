<?php

namespace App\UserInterface\Controller;

use App\UserInterface\Presenter\ChatPresenter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use YTeissier\Project\Domain\Request\ChatRequest;
use YTeissier\Project\Domain\UseCase\Chat;

/**
 * Class ChatController
 * @package App\UserInterface\Controller
 */
class ChatController
{

    /**
     * @param Chat $chat
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function __invoke(Chat $chat, SerializerInterface $serializer): JsonResponse
    {

        $presenter = new ChatPresenter();

        $chat->execute($presenter);

        return new JsonResponse($serializer->serialize($presenter->getChatViewModel(), 'json'), 200, [], true);
    }
}