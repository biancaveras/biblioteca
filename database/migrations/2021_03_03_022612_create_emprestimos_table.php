<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('dt_inicio');
            $table->date('dt_fim');

            $table->UnsignedBigInteger('livro_id');
            $table->UnsignedBigInteger('cliente_id');
            $table->UnsignedBigInteger('funcionario_id');

            $table->foreign('livro_id')
                ->references('id')
                ->on('livros');

            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes');

            $table->foreign('funcionario_id')
                ->references('id')
                ->on('funcionarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
