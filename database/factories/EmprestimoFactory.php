<?php

namespace Database\Factories;

use App\Models\Emprestimo;
use App\Models\Funcionario;
use App\Models\Livro;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

class EmprestimoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Emprestimo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dt_inicio' => Carbon::now(),
            'dt_fim' => Carbon::now(),
            'funcionario_id' => Funcionario::inRandomOrder()->first()->id,
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'livro_id' => Livro::inRandomOrder()->first()->id,
        ];
    }
}
