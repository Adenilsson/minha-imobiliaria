<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'tb_estados';
    protected $fillable =[
        'nome',
        'sigla',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'tb_pais_id'
    ];

    //Relacionamento com Pais
    public function pais(){
        return $this->belongsTo(Pais::class);
    }
    //Relacionamento com Cidade
    public function cidade(){
        return $this->hasMany(Cidade::class);
    }

}
