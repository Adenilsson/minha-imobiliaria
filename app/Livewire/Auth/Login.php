<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $title = "login";
    public $email;
    public $password;
    protected $rules =[
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
    public function login(){
        //dd('Email: '.$this->email. " Password: ".$this->password);
        $this->validate();
        if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password])){
            $user = Auth::user();
            //dd($user);
            return redirect()->route('/');
        }else{

            session()->flash('error','Email ou senha incorretos.');
            //dd("'email'=>'Invalid email or password'");
            return redirect()->back()->withErrors(['email'=>'Invalid email or password']);
        }
    }

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
