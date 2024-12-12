<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    protected $fillable = [
        'id', 'logradouro', 'numero', 'apartamento', 'bairro', 'cep',
        'complemento', 'created_at', 'updated_at', 'deleted_at',
        'tb_cidade_id', 'tb_estado_id', 'tb_pais_id'
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'tb_cidade_id');
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'endereco_id');
    }

    public function proprietarios()
    {
        return $this->hasMany(Proprietario::class);
    }

    public function imobiliarias()
    {
        return $this->hasMany(Imobiliaria::class);
    }
}
