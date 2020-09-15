<?php

namespace Zijinghua\Zchat\Http\Controllers\Chatroom;

use Zijinghua\Zchat\Http\Controllers\BaseController;
use Zijinghua\Zchat\Http\Requests\Chatroom\Record\DeleteRequest;
use Zijinghua\Zchat\Http\Requests\Chatroom\Record\IndexRequest;
use Zijinghua\Zchat\Http\Requests\Chatroom\Record\StoreRequest;
use Zijinghua\Zchat\Services\Chatroom\MedicalRecordService;

class MedicalRecordController extends BaseController
{
    /** @var MedicalRecordService  */
    protected $recordService;

    /**
     * MedicalRecordController constructor.
     * @param MedicalRecordService $recordService
     */
    public function __construct(MedicalRecordService $recordService)
    {
        $this->recordService = $recordService;
    }

    /**
     * 收藏聊天记录
     * @param StoreRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(StoreRequest $request)
    {
        $result = $this->recordService->store($request);
        return $result->response();
    }

    /**
     * 收藏列表
     * @param IndexRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(IndexRequest $request)
    {
        $result = $this->recordService->index($request);
        return $result->response();
    }

    /**
     * @param DeleteRequest $request
     * @return mixed
     */
    public function delete(DeleteRequest $request)
    {
        $result = $this->recordService->delete($request);
        return $result->response();
    }
}
