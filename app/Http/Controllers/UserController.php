<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollectionResource;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(UserRepositoryInterface $repository)
    {
        // return response()->json($this->success($repository->getAllUsers(), 'Listagem concluida'));
        return response()->json($repository->getAllUsers());   
    }

    public function store(UserRequest $request, UserRepositoryInterface $repository)
    {
        $user = $repository->storeUser($request);
        // return response()->json($this->success(new UserResource($user), 'Usuário Adicionado com Sucesso'));
        return response()->json(new UserResource($user));

    }
    public function show(UserRepositoryInterface $repository, $id)
    {   
        // return response()->json($this->success($repository->showUser($id), 'Eis aqui o usuario.'));
        return response()->json($repository->showUser($id));

    }

    public function update(UserRepositoryInterface $repository, UserRequest $request, $id)
    {
        // return response()->json($this->success($repository->updateUser($request, $id), 'Atualização Concluida'));
        return response()->json($repository->updateUser($request, $id));

    } 
    public function destroy(UserRepositoryInterface $repository, $id)
    {
        // return response()->json($this->success($repository->deleteUser($id), "Usuário deletado"));
        return response()->json($repository->deleteUser($id));

    }
}
