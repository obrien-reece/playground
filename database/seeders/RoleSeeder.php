<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'writer']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'user']);

        $permission = Permission::create(['name' => 'post articles']);
        $permission->assignRole('admin');

    }
}