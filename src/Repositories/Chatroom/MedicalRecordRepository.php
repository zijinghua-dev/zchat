<?php

namespace Zijinghua\Zchat\Repositories\Chatroom;

use Zijinghua\Zchat\Repositories\BaseRepository;

class MedicalRecordRepository extends BaseRepository
{
    /** @var base uri */
    protected $baseUri;

    /**
     * MedicalRecordRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->baseUri =
            config('zchat.chat.chat_service.host') .
            config('zchat.chat.chat_service.api.record.base');
    }

//    /**
//     * 收藏消息
//     * @param $params
//     * @return mixed
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public function store($params)
//    {
//        $uri = $this->baseUri . '/store';
//        $result = $this->httpRequest('post', $uri, $params);
//        return $result;
//    }
//    /**
//     * 收藏列表
//     * @param $params
//     * @return mixed
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public function list($params)
//    {
//        $uri = $this->baseUri;
//        $result = $this->httpRequest('post', $uri, $params);
//        return $result;
//    }
}
