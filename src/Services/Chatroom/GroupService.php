<?php

namespace Zijinghua\Zchat\Services\Chatroom;

use Zijinghua\Zchat\Repositories\Chatroom\GroupRepository;
use Zijinghua\Zchat\Services\BaseService;
use Illuminate\Support\Facades\Auth;

class GroupService extends BaseService
{
    /** @var GroupRepository  */
    protected $groupRepository;

    /**
     * GroupService constructor.
     * @param GroupRepository $groupRepository
     */
    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
        $this->setSlug('chatgroup');
    }

    /**
     * 创建聊天室
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['answers_id']));
        $params = $params->merge([
            'project_id' => config('zchat.chat.project_id'),
            'creator_id' =>$userId
        ]);
        $response = $this->groupRepository->store($params->all());
        if (!$response || (isset($response['httpCode']) && $response['httpCode'] >= 400)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'groupstore.submit.failed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'groupstore.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }

    /**
     * 聊天室列表
     * @param $request
     * @return array|\Illuminate\Contracts\Foundation\Application|mixed|\Symfony\Component\HttpFoundation\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index($request)
    {
        $userId = Auth::id();
        $params = collect($request->only(['answers_id']));
        $params = $params->merge([
            'user_id' => $userId,
            'creator_id' => $userId
        ]);
        $response = $this->groupRepository->list($params->all());

        if ((isset($response['httpCode']) && $response['httpCode'] >= 400)) {
            $messageResponse = $this->messageResponse($this->getSlug(), 'groupindex.submit.failed');
        } else {
            $messageResponse = $this->messageResponse(
                $this->getSlug(),
                'groupindex.submit.success',
                $response,
                null,
                null
            );
        }
        return $messageResponse;
    }
}
