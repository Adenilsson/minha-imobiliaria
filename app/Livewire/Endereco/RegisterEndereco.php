<?php

namespace App\Livewire\Endereco;

use Livewire\Component;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Cidade;


class RegisterEndereco extends Component
{
    public $title ="Endereço Do Imóvel.";

        public $paises  =[];
        public $estados =[];
        public $cidades = [];
        public $pais_id;
        public $estado_id;
        public $cidade_id;
        public $logradouro;
        public $bairro;
        public $numero;
        public $cep;
        public $complemento;
        public $apartamento;



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
        public function salve(){
            $this->validate([
                'logradouro' => 'required|string|max:255',
                'numero' => 'required|integer',
                'apartamento'=>'string|nullable',
                'bairro' => 'required|string|max:255',
                'complemento' => 'nullable|string|max:255',
                'pais_id' => 'required|integer',
                'estado_id' => 'required|integer',
                'cidade_id' => 'required|integer',
                'cep' => 'required|string|max:16',
            ]);
            $dados_endereco =[
                'logradouro' => $this->logradouro,
                'numero' => $this->numero,
                'apartamento'=>$this->apartamento,
                'bairro' => $this->bairro,
                'complemento' => $this->complemento,
                'tb_pais_id' => $this->pais_id,
                'tb_estado_id' => $this->estado_id,
                'tb_cidade_id' => $this->cidade_id,
                'cep' => $this->cep,
            ];

            //dd($dados_endereco);
            session()->put('dados_endereco',$dados_endereco);
            return redirect()->route('register-residence');

        }

        public function render()
        {
            if(session()->has("dados_proprietario")){
                return view('livewire.endereco.register-endereco');

            }else{
                session()->flash("error", "Por favor cadastre o proprietário primeiro. ");
                return redirect()->route('register-propietario');
            }

        }
    }
