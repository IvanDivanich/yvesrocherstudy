<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Login extends Component
{
    


    public function render()
    {
        return view('livewire.login');
    }
}
