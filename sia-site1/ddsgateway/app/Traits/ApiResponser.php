<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    // build success responser
    // success reponser
    public function successResponse($data, $code = Response::HTTP_OK)
    {
    // old code
     return response()->json(['data' => $data, 'site' => 1], $code);
    // this code is changes since the message to return is already
    return response($data, $code)->header('Content-Type',
   'application/json');
    }
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'site' => 1, 'code' => $code], $code);
    }

    // public function errorMessage($message, $code)
    // {
    // return response($message, $code)->header('Content-Type',
    // 'application/json');
    // }
    
    v
}