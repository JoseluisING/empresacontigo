<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	// Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'root']);
        // Permission::create(['name' => 'nombre del permiso']);

        // or may be done by chaining
        $role = Role::create(['name' => 'administrador'])
            ->givePermissionTo(['root']);

        // $role = Role::create(['name' => 'empleado'])
        // ->givePermissionTo(['encuentas', 'ver']);
    }
}
