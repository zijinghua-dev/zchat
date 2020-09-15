<?php

namespace Zijinghua\Zchat\Services;

use Zijinghua\Zbasement\Http\Services\BaseService as BasementService;
use Zijinghua\Zchat\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BaseService extends BasementService
{
    public $userId;

    /**
     * BaseService constructor.
     */
    public function __construct()
    {
        $this->userId = Auth::id();
    }

    /**
     * 格式化输出
     * @param $data
     * @return BaseModel
     */
    protected function formateData($data)
    {
        $createdAt = strtotime($data['created_at']);
        $updatedAt = strtotime($data['updated_at']);

        $data['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s', $createdAt));
        $data['updated_at'] = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s', $updatedAt));
        return (new BaseModel())->setAttributes($data);
    }
}
