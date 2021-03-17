<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->realText(10),
            'genero' => $this->faker->realText(10),
            'nacionalidade' => $this->faker->realText(20),
            'sinopse' => $this->faker->realText(50),
            'autor' => $this->faker->realText(20),
        ];
    }
}
