<?php

namespace App\Livewire\Residence;
use App\Models\Imovel;

use Livewire\Component;

class ResidenceStart extends Component
{
    public $imoveis;
    public function  mount(){
        $this-> getImoveisComRelacionamentos();
    }
    public function getImoveisComRelacionamentos() { // Consulta para buscar os imóveis com os relacionamentos
        $this->imoveis = Imovel::with(['user', 'endereco.cidade.estado.pais', 'proprietario', 'condicao', 'pretencao','imagens'])->get();

        // Exemplo de processamento dos dados (opcional)
        foreach ($this->imoveis as $imovel) {
           //dd($imovel);
            // echo $imovel->user->name; // Exemplo de acesso aos dados do usuário relacionado
            // echo $imovel->endereco->rua; // Exemplo de acesso aos dados do endereço relacionado
            // Acesse outros relacionamentos da mesma maneira
        }
        return $this->imoveis;
    }
    public function render()
    {
        return view('livewire.residence.residence-start');
    }
}
