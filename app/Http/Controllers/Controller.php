<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success($data = null, $message = '', $success = "Requisição completa."){
        
        return response()->json([
            'success' => $success,
            'data' => $data ?: [],
            'message' => $message ?: '' 
        ]);
    }

    protected function error(){
           
    }
}
