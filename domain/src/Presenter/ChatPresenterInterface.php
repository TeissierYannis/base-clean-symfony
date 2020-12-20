<?php

namespace YTeissier\Project\Domain\Presenter;

use YTeissier\Project\Domain\Response\ChatResponse;

/**
 * Interface ChatPresenterInterface
 * @package YTeissier\Project\Domain\Presenter
 */
interface ChatPresenterInterface
{
    /**
     * @param ChatResponse $chatResponse
     * @return mixed
     */
    public function present(ChatResponse $chatResponse);
}