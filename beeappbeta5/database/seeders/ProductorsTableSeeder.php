<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producer::create([
            'nombre_prod' => 'Jose',
            'apellido_prod' => 'Campo',
            'cedula_prod' => '122323434',
            'identificacion_comercial' => '10909323',
            'razon_social' => 'Mas Rica',
            'email_prod' => 'josecampo@gmail.com',
            'password' => '',
            'telefono_prod' => '3121234355',
            'direccion' =>'12n 34 - 4',
        ]);
        Producer::create([
            'nombre_prod' => 'Sofia',
            'apellido_prod' => 'Escobar',
            'cedula_prod' => '10022324324',
            'identificacion_comercial' => '998879323',
            'razon_social' => 'Miel de oro',
            'email_prod' => 'sofiae@gmail.com',
            'password' => '12345678',
            'telefono_prod' => '31355689',
            'direccion' =>'21n 44 - 7',
        ]);
        Producer::create([
            'nombre_prod' => 'Melissa',
            'apellido_prod' => 'Correa',
            'cedula_prod' => '122323434',
            'identificacion_comercial' => '23034232',
            'razon_social' => 'Mas Rica',
            'email_prod' => 'meiliss@gmail.com',
            'password' => '12345678',
            'telefono_prod' => '312646788',
            'direccion' =>'1n 8 - 4',
        ]);

    }
}
