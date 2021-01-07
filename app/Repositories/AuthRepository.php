<?php


namespace App\Repositories;

use App\Repositories\Contracts\AuthRepositoryInterface;


class AuthRepository implements AuthRepositoryInterface{
    

    public function login($request){
        
        $credentials = $request->only(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

    }

    private function respondWithToken($token){
         return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }
}