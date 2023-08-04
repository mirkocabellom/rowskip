<?php

namespace App\Helpers;

use Illuminate\Http\Response;

class ResponseHelper
{
    public static function sendSuccess($message)
    {
        return response()->json(['success' => true, 'message' => $message], 200);
    }

    public static function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public static function sendInfo($error, $errorMessages = [], $code = 403)
    {
        $response = [
            'success' => true,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public static function sendErrorFiveHundred($error, $errorMessages = [], $code = 500)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}