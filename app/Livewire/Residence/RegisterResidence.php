<?php

namespace App\Livewire\Residence;

use Livewire\Component;

class RegisterResidence extends Component
{
    public $title = "Imóvel";
    public function render()
    {
        return view('livewire.residence.register-residence');
    }
}
