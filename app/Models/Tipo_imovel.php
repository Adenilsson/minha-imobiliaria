<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_imovel extends Model
{
    use HasFactory;
    protected $table ='tb_tipo_imovel';
    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    //Relacionamento com Imovel
    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }
}
