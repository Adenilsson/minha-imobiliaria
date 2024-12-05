<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imobiliaria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cnpj',
        'created_at',
        'updated_at',
        'deleted_at',
        'tb_endereco_id'
    ];
    //Relacionamento com Endereco
    public function endereco(){
        return $this->belongsTo(Ender::class);
    }
    //Relacionamento com Imagem_banner
    public function imagem_banner(){
        return $this->hasMany(Imagem_banner::class);
    }
}
