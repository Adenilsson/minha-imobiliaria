<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretecao extends Model
{
    use HasFactory;
    protected $table = 'pretencao';
    protected $fillable = [
        'nome',
        ];
}
