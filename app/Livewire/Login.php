<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $login;
    public $password;

    protected $rules = [
        'login' => 'required|string',
        'password' => 'required|string',
    ];

    protected $messages = [
        'login.required' => 'Логин обязателен для заполнения.',
        'password.required' => 'Пароль обязателен для заполнения.',
    ];

    public function authenticate()
    {
        $this->validate();

        $user = User::where('email', $this->login)->orWhere('phone', $this->login)->first();
        if (!$user) {
            $this->addError('login', 'Пользователь с таким логином не найден.');
            return;
        }

        if (!Hash::check($this->password, $user->password)) {
            $this->addError('password', 'Неверный пароль.');
            return;
        }
        
        Auth::login($user);

        $token = Str::random(60);

        Session::put('token', $token);
        $user->remember_token = $token;
        $user->save();

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.login');
    }
}
