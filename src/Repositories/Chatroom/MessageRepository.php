<?php

namespace Zijinghua\Zchat\Repositories\Chatroom;

use Zijinghua\Zchat\Repositories\BaseRepository;

class MessageRepository extends BaseRepository
{
    /** @var base uri */
    protected $baseUri;

    /**
     * MessageRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->baseUri =
            config('zchat.chat.chat_service.host') .
            config('zchat.chat.chat_service.api.message.base');
    }

//    /**
//     * 发送消息
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
//
//    /**
//     * 消息列表
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
//
//    /**
//     * 撤回消息
//     * @param $params
//     * @return mixed
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public function delete($params)
//    {
//        $uri = $this->baseUri;
//        $result = $this->httpRequest('delete', $uri, $params);
//        return $result;
//    }
}
