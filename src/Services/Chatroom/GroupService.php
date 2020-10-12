<?php

namespace Zijinghua\Zchat\Services\Chatroom;

use Zijinghua\Zchat\Repositories\Chatroom\GroupRepository;
use Zijinghua\Zchat\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Zijinghua\Zbasement\Facades\Zsystem;
use Zijinghua\Zvoyager\Http\Repositories\GroupRepository as ZGroupRepository;

class GroupService extends BaseService
{
    /** @var GroupRepository  */
    protected $groupRepository;
    /** @var ZGroupRepository  */
    protected $zgroupRepository;

    /**
     * GroupService constructor.
     * @param GroupRepository $groupRepository
     */
    public function __construct(GroupRepository $groupRepository, ZGroupRepository $zgroupRepository)
    {
        $this->groupRepository = $groupRepository;
        $this->zgroupRepository = $zgroupRepository;
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
        $user = Auth::user();
        $userId = $user->id;
        $answersId = $request->input('answers_id');
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
        $this->setPermission($response['id'], $userId, $answersId);
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

    /**
     * 给用户授权
     * @param $groupId
     * @param $userId
     * @param $answersId
     */
    protected function setPermission($groupId, $userId, $answersId)
    {
        $model = Zsystem::model('group');
        $userDataType = Zsystem::repository('datatype')->fetch(['slug' => 'user']);
        $userRole = Zsystem::repository('role')->fetch(['name' => 'user']);
        $zgroup = $model->firstOrCreate(['name' => '聊天室群' . $groupId]);
        Zsystem::repository('organize')->save(['group_id' => $zgroup->id, 'name'=>'聊天室组' . $groupId]);
        Zsystem::repository('groupObject')->save([
            'group_id' => $zgroup->id,
            'datatype_id' => $userDataType->id,
            'object_id' => $userId,
        ]);
        Zsystem::repository('groupObject')->save([
            'group_id' => $zgroup->id,
            'datatype_id' => $userDataType->id,
            'object_id' => $answersId,
        ]);
        Zsystem::repository('groupUserRole')->save([
            'group_id' => $zgroup->id,
            'user_id' => $userId,
            'role_id' => $userRole->id,
        ]);
    }
}
