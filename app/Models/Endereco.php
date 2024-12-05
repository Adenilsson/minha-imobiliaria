<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'tb_enderecos';
    protected $fillable = [
        'id',
        'logradouro',
        'numero',
        'bairro',
        'cep',
        'complemento',
        'created_at',
        'updated_at',
        'deleted_at',
        'tb_cidade_id',
        'tb_estado_id',
        'tb_pais_id',
    ];

    // Relacionamento com cidade
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    // Relacionamento com tb_imovel
    public function imovel()
    {
        return $this->hasMany(Imovel::class);
    }

    // Relacionamento com Proprietario
    public function proprietario()
    {
        return $this->hasMany(Proprietario::class);
    }

    // Relacionamento com Imobiliaria
    public function imobiliaria()
    {
        return $this->hasMany(Imobiliaria::class);
    }
}
