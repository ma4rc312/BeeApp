<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'productor_id' => 1,
            'categoria_id' => 1,
            'nombre_producto' => 'Miel',
            'descripcion_producto' => 'Presentacion de 500 ml',
            'cantidad_producto' => 11,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 4500.9,
            'imagen_producto' => 'MIEL1.png'
        ]);
        Product::create([
            'productor_id' => 2,
            'categoria_id' => 2,
            'nombre_producto' => 'Polen',
            'descripcion_producto' => 'Presentacion de 1 kilo',
            'cantidad_producto' => 11,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 6899.90,
            'imagen_producto' => 'POLEN.png'
        ]);
        Product::create([
            'productor_id' => 1,
            'categoria_id' => 1,
            'nombre_producto' => 'miel',
            'descripcion_producto' => 'Presentacion de 100 ml',
            'cantidad_producto' => 16,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 9942.9,
            'imagen_producto' => 'MIEL1.png'
        ]);
        Product::create([
            'productor_id' => 3,
            'categoria_id' => 2,
            'nombre_producto' => 'Polen',
            'descripcion_producto' => 'Presentacion de 2 kilo',
            'cantidad_producto' => 8,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 9980.9,
            'imagen_producto' => 'POLEN2.png'
        ]);
        Product::create([
            'productor_id' => 3,
            'categoria_id' => 1,
            'nombre_producto' => 'Miel',
            'descripcion_producto' => 'Presentacion de 700 ml',
            'cantidad_producto' => 71,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 94340.9,
            'imagen_producto' => 'miel 2.png'
        ]);
        Product::create([
            'productor_id' => 3,
            'categoria_id' => 2,
            'nombre_producto' => 'Polen',
            'descripcion_producto' => 'Presentacion de 2 Kilos',
            'cantidad_producto' => 11,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 7990.9,
            'imagen_producto' => 'POLEN3.png'
        ]);
        Product::create([
            'productor_id' => 3,
            'categoria_id' => 2,
            'nombre_producto' => 'Propoleo',
            'descripcion_producto' => 'presentacion de 1 kilo',
            'cantidad_producto' => 15,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 8900.9,
            'imagen_producto' => 'POLEN.png'
        ]);
        Product::create([
            'productor_id' => 1,
            'categoria_id' => 1,
            'nombre_producto' => 'Propoleo',
            'descripcion_producto' => 'Presentacion de 1 kilo',
            'cantidad_producto' => 12,
            'fecha_producto' => date('Y/m/d'),
            'fecha_ven_producto' => date('Y/m/d'),
            'estado_producto' => 1,
            'precio' => 12033.9,
            'imagen_producto' => 'PROPOLEO2.png'
        ]);

    }
}
