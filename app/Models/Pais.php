<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'tb_pais';
    protected $fillable = [
        'nome', 'codigo'
    ];

    public function estados()
    {
        return $this->hasMany(Estado::class, 'tb_pais_id');
    }
}
