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
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'view reports']);
        Permission::create(['name' => 'edit reports']);
        Permission::create(['name' => 'delete reports']);

        Permission::create(['name' => 'view templates']);
        Permission::create(['name' => 'edit templates']);
        Permission::create(['name' => 'delete templates']);

        Permission::create(['name' => 'view csv_maps']);
        Permission::create(['name' => 'edit csv_maps']);
        Permission::create(['name' => 'delete csv_maps']);

        $admin = Role::create(['name' => 'admin']);
        $staff = Role::create(['name' => 'staff']);
        $guest = Role::create(['name' => 'guest']);
        
        // set admin permissions
        $admin->givePermissionTo('view users');
        $admin->givePermissionTo('edit users');
        $admin->givePermissionTo('delete users');

        $admin->givePermissionTo('view reports');
        $admin->givePermissionTo('edit reports');

        /*$admin = Role::where('name', 'admin')->first();
        $staff = Role::where('name', 'staff')->first();
        $guest = Role::where('name', 'guest')->first();*/

        $admin->givePermissionTo('delete reports');

        $admin->givePermissionTo('view templates');
        $admin->givePermissionTo('edit templates');
        $admin->givePermissionTo('delete templates');

        $admin->givePermissionTo('view csv_maps');
        $admin->givePermissionTo('edit csv_maps');
        $admin->givePermissionTo('delete csv_maps');

        // set staff permission
        $staff->givePermissionTo('view reports');
        $staff->givePermissionTo('edit reports');
        $staff->givePermissionTo('delete reports');

        $staff->givePermissionTo('view csv_maps');
        $staff->givePermissionTo('edit csv_maps');

        // set guest permissions
        $guest->givePermissionTo('view reports');
        $guest->givePermissionTo('edit reports');
        $guest->givePermissionTo('delete reports');

        $staff->givePermissionTo('view csv_maps');
    }
}
