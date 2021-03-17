<?php

namespace Database\Factories;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->realText(10),
            'nome' => $this->faker->realText(20),
            'funcao' => $this->faker->realText(20),
            'numero' => $this->faker->realText(10),
            'logradouro' => $this->faker->realText(20),
            'cidade' => $this->faker->realText(20),
            'estado' => $this->faker->realText(20),
            'email' => $this->faker->realText(20),
            'telefone' => $this->faker->realText(20),
        ];
    }
}
