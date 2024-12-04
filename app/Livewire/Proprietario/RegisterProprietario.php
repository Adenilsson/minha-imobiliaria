<?php

namespace App\Livewire\Proprietario;

use Livewire\Component;
use App\Models\Proprietario;
use Illuminate\Support\Facades\Validator;
use Exception;

class RegisterProprietario extends Component
{
    public $title ="Proprietário";
    public $nome;
    public $cpf;
    public $email;
    public $data_de_nasc;
    public $telefone;
    public $estado_civil;
    public $search;

    public function busca_proprietario() {

        $search = $this->search; // Verifica se a entrada é um CPF (supõe-se que o CPF tenha 11 dígitos)

        if (preg_match('/^[0-9]{11}$/', $search)) {
            $proprietarios = Proprietario::where('cpf', $search)->get();
            dd($proprietarios);
            $this->nome = $proprietarios[0]->nome;
            $this->email = $proprietarios[0]->email;
            $this->data_de_nasc = $proprietarios[0]->data_de_nasc;
            $this->telefone = $proprietarios[0]->telefone;
            $this->estado_civil = $proprietarios[0]->estado_civil;
            $this->cpf = $proprietarios[0]->cpf;
        } else {
            ///$proprietarios = Proprietario::where('nome', 'like', '%' . $search . '%')->get();
            session()->flash('message','O Cpf informado não é valid tente novamente.');
        } // Processar os resultados da busca (por exemplo, armazenar na sessão ou definir como propriedade do componente)

        //session()->flash('resultados', $proprietarios);
    }

    public function register(){
        //dd("Nome: ".$this->nome. "Cpf: ".$this->cpf. "Email: ".$this->email." Data de Nascimento: ".  $this->data_de_nasc. " Estado Civil: ".$this->estado_civil );

        $validatedData = $this->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:proprietario,cpf',
            'email' => 'required|string|email|max:255|unique:proprietario,email',
            'data_de_nasc' => 'required|date',
            'telefone'=>'required|string|max:15',
            'estado_civil'=>'required|string|max:50',
        ]);
        try {
            Proprietario::create($validatedData);
            session()->flash('message','Proprietário registrado com sucesso!');
            session()->flash('status','success');
        }catch(Exception $e){
            session()->flash('message','Erro ao registrar Proprietário!');
            session()->flash('status',$e->getMessage());
        }
        return redirect()->route('register-propietario');

    }

    public function render()
    {
        return view('livewire.proprietario.register-proprietario');
    }
}
