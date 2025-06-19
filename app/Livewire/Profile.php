<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{

    function toRegister()  {
        return redirect()->intended(route('register-nl'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Перенаправление на главную страницу или другую страницу
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
