<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the permissions
        $permissions = [
            'users',
            'categories',
            'blogs',
            'advertisements',
            'comments',
            'profile',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            $this->createAutoAllPermissions($permission);
        }

        // Fetch existing roles
        $superAdmin = Role::findByName('SuperAdmin');
        $admin = Role::findByName('Admin');
        $author = Role::findByName('Author');

        // Assign all permissions to SuperAdmin
        $superAdmin->givePermissionTo(Permission::all());

        // Assign permissions to Admin (excluding 'users' related permissions)
        $adminPermissions = Permission::whereNotIn('name', $this->getPermissionsForModule('users'))->get();
        $admin->givePermissionTo($adminPermissions);

        // Assign permissions to Author (only 'categories' and 'blogs' related permissions)
        $authorPermissions = Permission::whereIn('name', $this->getPermissionsForModule('categories'))
            ->orWhereIn('name', $this->getPermissionsForModule('blogs'))
            ->get();
        $author->givePermissionTo($authorPermissions);
    }

    /**
     * Create all CRUD permissions for a given module.
     *
     * @param string $permission
     */
    private function createAutoAllPermissions($permission)
    {
        Permission::firstOrCreate(['name' => $permission]);
        Permission::firstOrCreate(['name' => $permission . '.create']);
        Permission::firstOrCreate(['name' => $permission . '.edit']);
        Permission::firstOrCreate(['name' => $permission . '.show']);
        Permission::firstOrCreate(['name' => $permission . '.delete']);
    }

    /**
     * Get all CRUD permissions for a given module.
     *
     * @param string $module
     * @return array
     */
    private function getPermissionsForModule($module)
    {
        return [
            $module,
            $module . '.create',
            $module . '.edit',
            $module . '.show',
            $module . '.delete',
        ];
    }
}
