<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $role = "admin";
    public $surname;

    function toRegister()  {
        return redirect()->intended(route('register-nl'));
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
