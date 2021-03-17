<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\Livro::factory(2)->create();
        \App\Models\Funcionario::factory(2)->create();
        \App\Models\Cliente::factory(2)->create();
        \App\Models\Emprestimo::factory(1)->create();
    }
}
