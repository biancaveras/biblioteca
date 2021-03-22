<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emprestimo;

class Funcionario extends Model
{
	use HasFactory;

	public function emprestimos()
	{
		return $this->hasMany(Emprestimo::class);

	}

	protected $table = 'funcionarios';

	protected $fillable = [
		'nome',
		'cpf',
		'funcao',
		'estado',
		'logradouro',
		'cidade',
		'numero',
		'email',
		'telefone',
	];
}
