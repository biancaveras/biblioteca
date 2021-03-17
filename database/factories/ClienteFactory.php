<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->realText(10),
            'nome' => $this->faker->realText(40),
            'numero' => $this->faker->realText(10),
            'logradouro' => $this->faker->realText(20),
            'cidade' => $this->faker->realText(20),
            'estado' => $this->faker->realText(20),
            'email' => $this->faker->realText(20),
            'telefone' => $this->faker->realText(20),
        ];
    }
}
