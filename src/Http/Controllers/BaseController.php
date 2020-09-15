<?php

namespace Zijinghua\Zchat\Http\Controllers;

class BaseController
{
    /**
     * @param $response
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function returnResponse($response, $statusCode = 200)
    {
        return response()->json($response, $statusCode);
    }
}
