<?php

namespace Database\Factories;

use App\Models\Transporte;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteFactory extends Factory
{
    protected $model = Transporte::class;

    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->lexify('T???'),
            'nombre' => $this->faker->company,
            'razon_social' => $this->faker->company . ' S.A.',
        ];
    }
}
