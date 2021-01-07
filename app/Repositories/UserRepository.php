<?php

namespace App\Repositories;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface{

    private $userModel;

    public function __construct(User $userModel){

        $this->userModel = $userModel;
    }

    public function getAllUsers()
    {
        return $this->userModel->all();
    }

    public function storeUser($request){

        
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
           
            return $user;
    
    }

    public function showUser($id){

        return User::findOrFail($id);
    }

    public function updateUser($request, $id){

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return $user;
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }


}

