<?php

namespace Zijinghua\Zchat\Services\Chatroom;

use Zijinghua\Zchat\Repositories\Chatroom\MedicalRecordRepository;
use Zijinghua\Zchat\Services\BaseService;
use Illuminate\Support\Facades\Auth;

class MedicalRecordService extends BaseService
{
    /** @var MedicalRecordRepository  */
    protected $recordRepository;

    /**
     * MedicalRecordService constructor.
     * @param MedicalRecordRepository $recordRepository
     */
    public function __construct(MedicalRecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
        $this->setSlug('chatrecord');
    }

    /**
     * 收藏聊天记录
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($request)
    {
        $params = collect($request->only(['message_id']));
        $userId = Auth::id();
        $params = $params->merge(['project_id' => config('zchat.chat.project_id'), 'user_id' => $userId]);
        $response = $this->recordRepository->store($params->all());

        if (!$response || (isset($response['httpCode']) && $response['httpCode'] > 406)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'recordstore.submit.failed');
        } else if ((isset($response['httpCode']) && $response['httpCode'] == 406)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'recordstore.validation.ownerfailed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'recordstore.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }

    /**
     * 收藏列表
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['to', 'limit', 'firstid']));
        $params = $params->merge(['user_id' => $userId]);
        $response = $this->recordRepository->list($params->all());
        if ((isset($response['httpCode']) && $response['httpCode'] >= 400)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'recordindex.submit.failed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'recordindex.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }
    /**
     * 删除收藏
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['id']));
        $params = $params->merge(['user_id' => $userId]);
        $response = $this->recordRepository->delete($params->all());
        if (!$response) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'recorddelete.submit.failed');
        } else if (isset($response['httpCode']) && $response['httpCode'] == 404) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'recorddelete.validation.existsfailed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'recorddelete.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }
}
