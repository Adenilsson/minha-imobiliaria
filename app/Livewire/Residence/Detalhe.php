<?php

namespace App\Livewire\Residence;

use Livewire\Component;
use App\Models\Imovel;

class Detalhe extends Component
{
    public $imovelId;
    public $detalhes;
    public $imovel;
    public function mount($id)
    {
        $this->imovelId = $id;
        $this->buscarImovel();
    }

    public function buscarImovel()
    {
        $this->imovel = Imovel::with(['user', 'endereco.cidade.estado.pais', 'proprietario', 'condicao', 'pretencao','imagens'])->find($this->imovelId);


        if ($this->imovel) {
            $this->detalhes = $this->imovel;
            //dd($this->detalhes);
        } else {
            $this->detalhes = 'Imóvel não encontrado';

        }
        return $this->detalhes;
    }
    public function render()
    {
        return view('livewire.residence.detalhe');
    }
}
