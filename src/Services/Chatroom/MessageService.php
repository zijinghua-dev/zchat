<?php

namespace Zijinghua\Zchat\Services\Chatroom;

use Zijinghua\Zchat\Repositories\Chatroom\MessageRepository;
use Zijinghua\Zchat\Services\BaseService;
use Illuminate\Support\Facades\Auth;

class MessageService extends BaseService
{
    /** @var MessageRepository  */
    protected $messageRepository;

    /**
     * MessageService constructor.
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
        $this->setSlug('chatmessage');
    }

    /**
     * 发送消息
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['to', 'type', 'content']));
        $params = $params->merge([
            'from' => $userId,
            'project_id' => config('zchat.chat.project_id')
        ]);
        $response = $this->messageRepository->store($params->all());
        if (!$response || (isset($response['httpCode']) && $response['httpCode'] > 406)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messagestore.submit.failed');
        } else if ((isset($response['httpCode']) && $response['httpCode'] == 406)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messagestore.validation.ownerfailed');

        } else {
            $result = $this->formateData($response);
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'messagestore.submit.success',
                $result,
                null,
                null
            );
        }
        return $messageResponse;
    }

    /**
     * 消息列表
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['to', 'limit', 'firstid']));
        $params = $params->merge(['user_id' => $userId]);
        $response = $this->messageRepository->list($params->all());
        if ((isset($response['httpCode']) && $response['httpCode'] >= 400)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messageindex.submit.failed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'messageindex.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }

    /**
     * 撤回消息
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['id', 'user_name']));
        $params = $params->merge(['user_id' => $userId]);
        $response = $this->messageRepository->delete($params->all());

        if (!$response) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messagedelete.submit.failed');
        } else if (isset($response['httpCode']) && $response['httpCode'] == 406) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messagedelete.validation.ownerfailed');
        } else if (isset($response['httpCode']) && $response['httpCode'] == 404) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'messagedelete.validation.existsfailed');
        }else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'messagedelete.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }
}
