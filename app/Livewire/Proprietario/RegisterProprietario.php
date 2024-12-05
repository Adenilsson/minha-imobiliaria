<?php

namespace App\Livewire\Proprietario;

use Livewire\Component;
use App\Models\Proprietario;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Rules\ValidarCpf;

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
        $validatedData = $this->validate([
            'search' => ['required', 'string', 'max:14', new ValidarCpf],
        ]);
        $search = $this->search; // Verifica se a entrada é um CPF (supõe-se que o CPF tenha 11 dígitos)
        if (preg_match('/^[0-9]{11}$/', $search)) {
            $proprietarios = Proprietario::where('cpf', $search)->get();
            //dd($proprietarios);
            $this->nome = $proprietarios[0]->nome;
            $this->email = $proprietarios[0]->email;
            $this->data_de_nasc = $proprietarios[0]->data_de_nasc;
            $this->telefone = $proprietarios[0]->telefone;
            $this->estado_civil = $proprietarios[0]->estado_civil;
            $this->cpf = $proprietarios[0]->cpf;
            session()->flash('status','success');
            session()->flash('cpf','Proprietáro encontrado.');
        } else {
            session()->flash('status','error');
            session()->flash('cpf','O Cpf informado não é valid tente novamente.');
        } // Processar os resultados da busca (por exemplo, armazenar na sessão ou definir como propriedade do componente)
        //session()->flash('resultados', $proprietarios);
    }

    public function register()
{
        // Validação dos dados
        $validatedData = $this->validate([
            'nome' => 'required|string|min:3|max:255',
            'cpf' => ['required', 'string', 'max:14', new ValidarCpf],
            'email' => 'required|string|email|max:255',
            'data_de_nasc' => 'required|date',
            'telefone' => 'required|string|max:15',
            'estado_civil' => 'required|string|max:50',
        ]);

        try {
            // Busca o proprietário pelo CPF
            $proprietario = Proprietario::where('cpf', $this->cpf)->first();


            if ($proprietario) {
                // Atualiza os dados do proprietário existente
                $proprietario->update($validatedData);
                session()->flash('register', 'Proprietário atualizado com sucesso!');
                session()->flash('status', 'success');
            } else {
                // Cria um novo proprietário
                Proprietario::create($validatedData);
                session()->flash('register', 'Proprietário registrado com sucesso!');
                session()->flash('status', 'success');
            }
        } catch (Exception $e) {
            session()->flash('register', 'Erro ao registrar Proprietário: ' . $e->getMessage());
            session()->flash('status', 'error');
        }

        return view('livewire.proprietario.register-proprietario');
    }


    public function render()
    {
        return view('livewire.proprietario.register-proprietario');
    }
}
