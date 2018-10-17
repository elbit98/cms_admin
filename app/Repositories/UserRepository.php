<?php

namespace App\Repositories;


use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRepository
{


    /**
     * @param $request
     */
    public function create($request)
    {
        $user = User::create($request->only('email', 'first_name', 'last_name', 'password', 'status'));
        $user->assignRole($request->role);
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function role()
    {
        $roles = Role::get();

        $roleData = collect();
        foreach ($roles as $role) {
            $roleData->push([$role->id => $role->name]);
        }

        return $roleData;
    }

}