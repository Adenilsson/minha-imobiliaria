<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem_banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'created_at',
        'updated_at',
        'deleted_at',
        'tb_imobiliaria'
    ];
    //Relacionamento com Imobiliaria
    public function imobiliaria()
    {
        return $this->belongsTo(Imobiliaria::class);
    }
}
