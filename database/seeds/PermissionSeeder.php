<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = collect(json_decode(\Storage::get('json/permission.json'), true));

        foreach ($data as $roleData) {

            $role = Role::create(["name" => $roleData['name']]);

            foreach ($roleData['permission'] as $key => $permissionValue) {
                $permission = Permission::updateOrCreate(['name' => $permissionValue]);
                $permission->assignRole($role);
            }
        }
    }
}
