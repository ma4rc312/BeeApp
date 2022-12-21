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

        Permission::create(['name'=>'dashboard', 
                            'description' => 'Ver el dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'users.index', 
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'users.edit', 
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name'=>'categorias.index', 
                            'description' => 'Ver listado de categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.create', 
                            'description' => 'Crear categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.edit', 
                            'description' => 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'categorias.destroy', 
                            'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        Permission::create(['name'=>'productores.index', 
                            'description' => 'Ver listado de productores'])->syncRoles([$role2]);
        Permission::create(['name'=>'productores.create', 
                            'description' => 'Crear productores'])->syncRoles([$role1]);
        Permission::create(['name'=>'productores.edit', 
                            'description' => 'Editar productores'])->syncRoles([$role1]);
        Permission::create(['name'=>'productores.destroy', 
                            'description' => 'Eliminar productores'])->syncRoles([$role1]);

        Permission::create(['name'=>'productos.index', 
                            'description' => 'Ver listado de productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.create', 
                            'description' => 'Crear productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.edit', 
                            'description' => 'Editar productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.destroy', 
                            'description' => 'Eliminar productos'])->syncRoles([$role1,$role2]);
    }
}
