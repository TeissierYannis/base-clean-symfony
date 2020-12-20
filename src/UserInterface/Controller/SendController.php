<?php

namespace App\UserInterface\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use YTeissier\Project\Domain\Request\SendRequest;
use YTeissier\Project\Domain\UseCase\Send;

/**
 * Class SendController
 * @package App\UserInterface\Controller
 */
class SendController
{
    /**
     * @param Send $send
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function __invoke(Send $send, Request $request, SerializerInterface $serializer): JsonResponse
    {
        /** @var SendRequest $request */
        $request = $serializer->deserialize($request->getContent(), SendRequest::class, 'json');

        $send->execute($request);

        return new JsonResponse(null, Response::HTTP_CREATED);
    }
}