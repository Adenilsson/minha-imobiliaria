<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'tb_cidades';
    protected $fillable = [
        'nome',
        'created_at',
        'updated_at',
        'deleted_at',
        'estado_id'
        ];
    //Relacionamento com Esta
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    //Relacionamento com endereço
    public function endereco()
    {
        return $this->hasMany(Endereco::class);
    }
}
