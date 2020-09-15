<?php

namespace Zijinghua\Zchat\Http\Controllers\Chatroom;

use Zijinghua\Zchat\Http\Controllers\BaseController;
use Zijinghua\Zchat\Http\Requests\Chatroom\Group\IndexRequest;
use Zijinghua\Zchat\Http\Requests\Chatroom\Group\StoreRequest;
use Zijinghua\Zchat\Services\Chatroom\GroupService;

class GroupController extends BaseController
{
    protected $groupService;

    /**
     * GroupController constructor.
     * @param GroupService $groupService
     */
    public function __construct(GroupService $groupService)
    {
        $this->groupService = $groupService;
    }

    /**
     * store chatroom group
     * @param StoreRequest $request
     * @return mixed
     */
    public function store(StoreRequest $request)
    {
        $result = $this->groupService->store($request);
        return $result->response();
    }

    public function index(IndexRequest $request)
    {
        $result = $this->groupService->index($request);
        return $result->response();
    }
}
