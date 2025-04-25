<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function responseCreated($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Created sucessfully'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 201);
    }

    public function responseOk($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Queried sucessfully'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 200);
    }

    public function responseAccepted($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Sucessfully accepted'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 202);
    }

    public function responseNotFound($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Not Found'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 404);

    }

    public function responseBadRequest($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Bad Request'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 400);
    }

    public function responseForbidden($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Forbidden'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 403);
    }

    public function responseUnauthorized($message = null, $metadata = null){
        $response = [
            'success' => true,
            'message' => $message ?? 'Unauthorized'
        ];
        if ($metadata) $response['data'] = $metadata;
        return response()->json($response, 401);
    }
}
