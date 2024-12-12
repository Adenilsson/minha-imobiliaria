<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem_imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'path',
        'capa',
        'tb_imovel_id'
    ];

    protected $table = 'imagem_imovel';

    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'tb_imovel_id');
    }
}
