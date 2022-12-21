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
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'categorias.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'unidadMedida.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'unidadMedida.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'unidadMedida.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'unidadMedida.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'departamentos.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'departamentos.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'departamentos.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'departamentos.destroy'])->syncRoles([$role1,$role2]);
    }
}
