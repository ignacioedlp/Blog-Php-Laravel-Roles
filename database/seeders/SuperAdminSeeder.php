<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create(['name' => 'Super Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('12345678')
                ]);

        $role = Role::create(['name' => 'Administrador']);

        $permission = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permission);

        $usuario->assignRole([$role->id]);

    }
}
