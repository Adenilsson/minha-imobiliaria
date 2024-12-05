<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'tb_imovel';

    protected $fillable = [
        'id',
        'tb_users_id',
        'tb_endereco_id',
        'descricao',
        'area_total',
        'area_construida',
        'quartos',
        'banheiros',
        'suites',
        'garagem',
        'valor',
        'tb_categoria_id',
        'tb_tipo_imovel_id',
        'tb_proprietario_id',
        'status',
    ];

    // Relacionamento com users
    public function user()
    {
        return $this->belongsTo(User::class, 'tb_users_id');
    }

    // Relacionamento com endereco
    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'tb_endereco_id');
    }

    // Relacionamento com proprietario
    public function proprietario()
    {
        return $this->belongsTo(Proprietario::class, 'tb_proprietario_id');
    }

    // Relacionamento com tipo_imovel
    public function tipoImovel()
    {
        return $this->belongsTo(Tipo_imovel::class, 'tb_tipo_imovel_id');
    }

    // Relacionamento com categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'tb_categoria_id');
    }

    // Relacionamento com Imagem_imovel
    public function imagens()
    {
        return $this->hasMany(Imagem_imovel::class, 'tb_imovel_id', 'id');
    }
}
