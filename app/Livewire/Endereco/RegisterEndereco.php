<?php

namespace App\Livewire\Endereco;

use Livewire\Component;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Cidade;


class RegisterEndereco extends Component
{
    public $title ="Endereço";

        public $paises;
        public $estados =[];
        public $pais_id;
        public $estado_id;
        public $cidades = [];

        public function mount()
        {
            $this->paises = Pais::all();
        }

        public function updatedPaisId($value)
        {
            $this->estados = Estado::where('tb_pais_id', $value)->get();
            $this->estado_id = null; // Reseta a seleção de estados
        }
        public function updatedEstadoId($value){

            $this->cidades = Cidade::where('tb_estado_id', $value)->get();

        }

        public function render()
        {
            return view('livewire.endereco.register-endereco');
        }
    }
