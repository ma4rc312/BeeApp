<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'municipio'=>$this->faker->city(),
            'lugar'=>$this->faker->citySuffix(),
            'nombre'=>$this->faker->streetName(),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->e164PhoneNumber(),
            'correo'=>$this->faker->email(),
            'foto'=>$this->faker->image(),
            'descripcion'=>$this->faker->paragraph(),
            'tipo_actividad'=>$this->faker->jobTitle(),
            'horario_atencion'=>$this->faker->dayOfWeek(),
            'estado'=>$this->faker->boolean(),
            
        ];
    }
}
