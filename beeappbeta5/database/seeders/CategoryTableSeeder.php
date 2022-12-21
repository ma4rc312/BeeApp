<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nombre_categoria' => 'Miel',
            'descripcion_categoria' => "Un liquido muy delicioso",
        ]);
        Category::create([
            'nombre_categoria' => 'Polen',
            'descripcion_categoria' => "Granitos ricos",
        ]);
        Category::create([
            'nombre_categoria' => 'Cera',
            'descripcion_categoria' => "Prodcuto solido de miel",
        ]);
        Category::create([
            'nombre_categoria' => 'Propoleo',
            'descripcion_categoria' => "Prodcuto solido de miel",
        ]);
    }
}
