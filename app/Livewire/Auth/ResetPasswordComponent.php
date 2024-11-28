<?php
namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordComponent extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ];

    public function sendResetLinkEmail()
    {
        $this->validateOnly('email');

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status == Password::RESET_LINK_SENT) {
            session()->flash('message', 'Link de redefinição de senha enviado para seu email.');
        } else {
            session()->flash('error', 'Falha ao enviar link de redefinição de senha.');
        }
    }

    public function resetPassword()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required|string',
        ]);

        $status = Password::reset(
            ['email' => $this->email, 'password' => $this->password, 'password_confirmation' => $this->password_confirmation, 'token' => $this->token],
            function (User $user, string $password) {
                $user->forceFill(['password' => Hash::make($password)])->save();
                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            session()->flash('message', 'Senha redefinida com sucesso!');
            return redirect()->route('login');
        } else {
            session()->flash('error', 'Falha ao redefinir a senha.');
        }
    }

    public function render()
    {
        
        return view('livewire.auth.reset-password-component');
    }
}
