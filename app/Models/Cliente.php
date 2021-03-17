<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emprestimo;

class Cliente extends Model
{
    use HasFactory;

    public function emprestimos()
    {
    	return $this->hasMany(Emprestimo::class);

    }
}
