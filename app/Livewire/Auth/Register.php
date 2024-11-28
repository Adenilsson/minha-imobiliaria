<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function register(){
        dd("função que registra o usuário");
        return route('/');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
