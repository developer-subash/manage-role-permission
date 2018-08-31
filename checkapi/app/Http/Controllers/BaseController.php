<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    private $successkey = 200;
    // private $validationerrorkey = 401;

    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        
        return response()->json($response, $this->successkey);
    }

    public function sendError($error,$errormessages = [],$errorKey = null)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        
        if($errorKey == '')
        {
            $errorKey = 401;
        }

        return response()->json($response, $errorKey);
    }

    
}
