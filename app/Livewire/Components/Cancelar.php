<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Cancelar extends Component
{
    public function cancelar()
    {
        if(session()->has('dados_endereco')){
            session()->forget('dados_endereco');
        }
        if(session()->has('endereco_proprietario')){
            session()->forget('endereco_proprietario');
        }
        if(session()->has('dados_proprietario')){
            session()->forget('dados_proprietario');
        }
        if(session()->has('dados_imovel')){
            session()->forget('dados_imovel');
        }

        // Use o método de redirecionamento do Livewire
        return redirect()->to('/');

    }
    public function render()
    {
        return view('livewire.components.cancelar');
    }
}
