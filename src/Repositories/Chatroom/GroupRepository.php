<?php

namespace Zijinghua\Zchat\Repositories\Chatroom;

use Zijinghua\Zchat\Repositories\BaseRepository;

class GroupRepository extends BaseRepository
{
    /** @var base uri */
    protected $baseUri;

    /**
     * GroupRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->baseUri =
            config('zchat.chat.chat_service.host') .
            config('zchat.chat.chat_service.api.group.base');
    }

//    /**
//     * chat group list
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
//    /**
//     * store chat group
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
}
