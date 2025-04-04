<?php

namespace Database\Factories;

use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;

class CamionFactory extends Factory
{
    protected $model = Camion::class;

    public function definition()
    {
        return [
            'id_camion' => $this->faker->uuid(),
            'id_transporte' => Transporte::factory(),  // Asegúrate de que se cree un transporte relacionado
            'id_marca' => Marca::factory(),  // Asegúrate de que se cree una marca relacionada
            'placa' => $this->faker->text(50),
            'codigo_interno' => $this->faker->randomFloat(2, 0, 1000),
            'color' => $this->faker->safeColorName(),
            'modelo' => $this->faker->year(),
            'capacidad_toneladas' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
