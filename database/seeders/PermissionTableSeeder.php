<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'employee-list',
           'employee-create',
           'employee-edit',
           'employee-delete',
           'brance-list',
           'brance-create',
           'brance-edit',
           'brance-delete',
           'web-list',
           'web-create',
           'web-edit',
           'web-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'activeemployee-list',
           'inactiveemployee-list',
           'passportexpire-list',
           'rdexpiry-list',
           'workpermitreport-list',


        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
