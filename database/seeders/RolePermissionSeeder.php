<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Permission
         */

        // Permission untuk pengelolaan pengiriman
        Permission::create(['name' => 'add-pengiriman']);
        Permission::create(['name' => 'edit-pengiriman']);
        Permission::create(['name' => 'read-pengiriman']);
        Permission::create(['name' => 'delete-pengiriman']);


        /**
         * Role
         */
        Role::create(['name' => 'user']);
        Role::create(['name' => 'agent']);
        Role::create(['name' => 'admin']);


        /**
         * Role Admin
         */
        
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('add-pengiriman');
        $roleAdmin->givePermissionTo('edit-pengiriman');
        $roleAdmin->givePermissionTo('read-pengiriman');
        $roleAdmin->givePermissionTo('delete-pengiriman');

        /**
         * Role Agent
        */
        $roleAgent = Role::findByName('agent');
        $roleAgent->givePermissionTo('add-pengiriman');
        $roleAgent->givePermissionTo('edit-pengiriman');
        $roleAgent->givePermissionTo('read-pengiriman');
        $roleAgent->givePermissionTo('delete-pengiriman');


         /**
         * Role USer
         */
        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('read-pengiriman');
    }
}
