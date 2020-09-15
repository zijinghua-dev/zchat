<?php

namespace Zijinghua\Zchat\Http\Controllers\Chatroom;

use Zijinghua\Zchat\Http\Controllers\BaseController;
use Zijinghua\Zchat\Http\Requests\Chatroom\Message\DeleteRequest;
use Zijinghua\Zchat\Http\Requests\Chatroom\Message\IndexRequest;
use Zijinghua\Zchat\Http\Requests\Chatroom\Message\StoreRequest;
use Zijinghua\Zchat\Services\Chatroom\MessageService;

class MessageController extends BaseController
{
    protected $messageService;

    /**
     * MessageController constructor.
     * @param MessageService $groupService
     */
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * 发送消息
     * @param StoreRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(StoreRequest $request)
    {
        $result = $this->messageService->store($request);
        return $result->response();
    }

    /**
     * 消息列表
     * @param IndexRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(IndexRequest $request)
    {
        $result = $this->messageService->index($request);
        return $result->response();
    }

    /**
     * 撤回消息
     * @param DeleteRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(DeleteRequest $request)
    {
        $result = $this->messageService->delete($request);
        return $result->response();
    }
}
