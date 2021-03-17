<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Livro;

class Emprestimo extends Model
{
    use HasFactory;

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);

    }

    public function funcionario()
    {
    	return $this->belongsTo(Funcionario::class);

    }

    public function cliente()
    {
    	return $this->belongsTo(Livro::class);

    }
}
