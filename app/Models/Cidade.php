<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'tb_cidades';

    protected $fillable = [
        'nome', 'estado_id'
    ];

    public function estado()
    {

        return $this->belongsTo(Estado::class, foreignKey: 'tb_estado_id');
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, foreignKey: 'tb_cidade_id');
    }
}

