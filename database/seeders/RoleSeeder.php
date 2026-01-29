<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles/permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // -----------------------------
        // Create Permissions (Optional)
        // -----------------------------
        $permissions = [
            //User Management fo all==========================================
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',
            'user.role_assign',
            'user.role_remove',

            //Client Management
            'client.view',
            'client.create',
            'client.edit',
            'client.delete',

            //Employee user Management
            'employee.view',
            'employee.create',
            'employee.edit',
            'employee.delete',

            //New User Management
            'newuser.view',
            'newuser.create',
            'newuser.edit',
            'newuser.delete',

            //Project Management
            'project.view',
            'project.create',
            'project.edit',
            'project.delete',
            //services Management
            'service.view',
            'service.create',
            'service.edit',
            'service.delete',
            //packages Management
            'package.view',
            'package.create',
            'package.edit',
            'package.delete',
            //packages Management
            'subscription.view',
            'subscription.create',
            'subscription.edit',
            'subscription.delete',
            //System Management
            'system.view',
            'system.edit',
            //account Management
            'profile.view',
            'profile.edit',
            'account.edit',

            'invoice.view',
            'invoice.create',
            'invoice.edit',
            'invoice.delete',



            //permission
            'permission.view',
            'permission.create',
            'permission.edit',
            'permission.delete',

            //role
            'role.view', 'role.create', 'role.edit', 'role.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // -----------------------------
        // Create Roles
        // -----------------------------

        $roles = [
            'superadmin', 'admin', 'employee', 'client','user'
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        Role::findByName('superadmin')->syncPermissions(Permission::all());

        // -----------------------------
        // Assign permissions to roles
        // -----------------------------

        $superadmin = Role::findByName('superadmin');
        $admin = Role::findByName('admin');
        $employee = Role::findByName('employee');
        $customer = Role::findByName('client');
        $user = Role::findByName('user');


    }
}
