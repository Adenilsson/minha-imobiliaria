<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagem_imovel extends Model
{
    //use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'path',
        'capa',
        'tb_imovel_id'
    ];

    // Nome da tabela, se necessário
    protected $table = 'imagem_imovel';

    // Relacionamento com Imovel
    public function imovel()
    {
        //return $this->belongsTo(Imovel::class, 'tb_imovel_id', 'id');
        return $this->belongsTo(Imovel::class, 'tb_imovel_id');
    }
}
