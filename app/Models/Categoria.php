<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'tb_categorias';
    protected $fillable = [
        'categoria',
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
