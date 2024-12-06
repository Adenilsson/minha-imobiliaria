<?php

namespace App\Livewire\Residence;

use Livewire\Component;
use App\Models\Tipo_Imovel;
use App\Models\Condicao;
use App\Models\Pretecao;

class RegisterResidence extends Component
{
    public $title = "Imóvel";
    public $tipo_imoveis = [];
    public $condicoes = [];
    public $pretencoes = [];
    public $tipo_imovel_id;
    public $condicao_id;
    public $pretencao_id;
    public $area_construida;
    public $area_total;
    public $quartos; // Corrigido de 'quarto'
    public $bairo;
    public $banheiros; // Corrigido de 'banheiro'
    public $garagem;
    public $descricao_imovel; // Corrigido de 'descricao'
    public $valor;

    public function mount(){
        $this->tipo_imoveis = Tipo_Imovel::all();
        $this->condicoes = Condicao::all();
        $this->pretencoes = Pretecao::all();
    }

    public function salve(){
        $this->validate([
            'tipo_imovel_id' => 'required',
            'condicao_id' => 'required',
            'pretencao_id' => 'required',
            'area_construida' => 'required',
            'area_total' => 'required',
            'quartos' => 'required', // Corrigido de 'quarto'
            'banheiros' => 'required', // Corrigido de 'banheiro'
            'garagem' => 'required',
            'descricao_imovel' => 'required', // Corrigido de 'descricao'
            'valor' => 'required',
        ]);

        $dados_imovel = [
            'tipo_imovel_id' => $this->tipo_imovel_id,
            'condicao_id' => $this->condicao_id,
            'pretencao_id' => $this->pretencao_id,
            'area_construida' => $this->area_construida,
            'area_total' => $this->area_total,
            'quartos' => $this->quartos, // Corrigido de 'quarto'
            'banheiros' => $this->banheiros, // Corrigido de 'banheiro'
            'garagem' => $this->garagem,
            'descricao_imovel' => $this->descricao_imovel, // Corrigido de 'descricao'
            'valor' => $this->valor,
            'status' => 0,
        ];

        //dd($dados_imovel); // Remova após verificar os dados

        session()->put('dados_imovel', $dados_imovel);
        return redirect()->route('imagem_imovel');
    }

    public function render()
    {
        return view('livewire.residence.register-residence');
    }
}
