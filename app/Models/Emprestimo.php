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

    protected $table = 'emprestimos';

    protected $fillable = [
        'dt_inicio',
        'dt_fim',
        'livro_id',
        'cliente_id',
        'funcionario_id',

    ];

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);

    }

    public function funcionario()
    {
    	return $this->belongsTo(Funcionario::class);

    }

    public function livro()
    {
    	return $this->belongsTo(Livro::class);

    }
}
