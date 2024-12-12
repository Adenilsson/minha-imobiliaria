<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imovel';

    protected $fillable = [
        'id', 'users_id', 'endereco_id', 'descricao', 'area_total', 'area_construida',
        'quartos', 'banheiros', 'suites', 'garagem', 'valor', 'tb_tipo_imovel_id',
        'proprietario_id', 'status', 'condicao_id', 'pretencao_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function proprietario()
    {
        return $this->belongsTo(Proprietario::class, 'proprietario_id');
    }

    public function condicao()
    {
        return $this->belongsTo(Condicao::class, 'condicao_id');
    }

    public function pretencao()
    {
        return $this->belongsTo(Pretecao::class, 'pretencao_id');
    }

    public function imagens()
    {
        return $this->hasMany(Imagem_imovel::class, 'tb_imovel_id');
    }
}
