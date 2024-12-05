<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleRecep = Role::create(['name' => 'Recepcionista']);
        $roleMedico = Role::create(['name' => 'Médico']);
        $rolePaciente = Role::create(['name' => 'Paciente']); */

        $user = User::find(1);
        $role = Role::findByName('Administrador');
        $user->assignRole($role);
    }
}
