<?php

namespace App\Livewire\Teste;

use Livewire\Component;

class Teste extends Component
{
    public $title = "Teste";
    public $nome;
    public $count =0;



    public function render()
    {
        return view('livewire.teste.teste');
    }
}
