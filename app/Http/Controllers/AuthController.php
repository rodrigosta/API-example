<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AuthRepositoryInterface;

class AuthController extends Controller
{
    public function login(Request $request, AuthRepositoryInterface $repository)
    {
        return $repository->login($request);
    }
}
