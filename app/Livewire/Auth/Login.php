<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login extends Component
{
    public $title = "login";
    public $email;
    public $password;
    protected $rules =[
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
    public function login() {
        $this->validate(); // Verificar se o email existe
        $user = User::where('email', $this->email)->first();
        if (!$user) {
            session()->flash('error', 'O email não foi encontrado em nossa base de dados. Verifique o email.');
            return;
        } // Verificar se as credenciais estão corretas
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Senha inválida.');
            return;
        } // Login bem-sucedido
        session()->flash('message', 'Login realizado com sucesso.');
        return redirect()->intended('/'); }

    public function isLogado()
     {
        // Se o usuário está logado, redireciona para o dashboard
        if (Auth::check()) {
            //dd("Você esta logado .");
             return redirect()->route('/');
        }else{
            //dd('voce não esta logado.');
        }
    }
    public function render() {
        // Chama a função para verificar se o usuário está logado

        $this->isLogado();
        // Renderiza a view de login se o usuário não estiver logado
        return view('livewire.auth.login');
    }
}
