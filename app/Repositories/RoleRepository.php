<?php

namespace App\Repositories;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRepository
{


    public function create($request)
    {

        $role = Role::create($request->only('name'));

        if ($request['news_checkbox']) {
            foreach ($request['news_checkbox'] as $permission) {
                $role->givePermissionTo($permission);
            }
        }

        if ($request['user_checkbox']) {
            foreach ($request['user_checkbox'] as $permission) {
                $role->givePermissionTo($permission);
            }
        }

        return $role;

    }


    public function update($role, $request)
    {

        $role->revokePermissionTo(Permission::all());

        if ($request['news_checkbox']) {
            foreach ($request['news_checkbox'] as $permission) {
                $role->givePermissionTo($permission);
            }
        }

        if ($request['user_checkbox']) {
            foreach ($request['user_checkbox'] as $permission) {
                $role->givePermissionTo($permission);
            }
        }


        $role->name = $request->name;
        $role->save();

        return $role;

    }


}