<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Register extends Component
{
    #[Rule('required|min:3|max:255', message: 'Имя должно содержать от 3 до 255 символов.')]
    public $name;

    #[Rule('required|min:3|max:255', message: 'Фамилия должна содержать от 3 до 255 символов.')]
    public $surname;

    #[Rule('required|email|unique:users,email', message: 'Неверный формат Email или Email уже занят.')]
    public $email;

    #[Rule('required|min:8', message: 'Пароль должен содержать минимум 8 символов.')]
    public $password;

    #[Rule('regex:/^\+?[0-9\s\-()]+$/', message: 'Неверный формат телефона.')]
    public $phone;

    #[Rule('string|max:255', message: 'Длина должности не должна превышать 255 символов.')]
    public $post;

    #[Rule('nullable|date', message: 'Неверный формат даты приема на работу.')]
    public $employmentDate;

    #[Rule('nullable|date|before:today', message: 'Неверный формат даты рождения. Дата рождения не может быть в будущем.')]
    public $dateOfBirth;

    #[Rule('required|exists:roles,id', message: 'Необходимо выбрать роль.')]
    public $role_id;

    #[Rule('required|exists:shops,id', message: 'Необходимо выбрать магазин.')]
    public $shop_id;

    public $roles; // Коллекция ролей
    public $shops; // Коллекция магазинов

    public function mount()
    {
        $this->roles = Role::all();
        $this->shops = Shop::all();
    }

    public function createUser(): void
    {
        $this->validate(); // Запускаем валидацию

        try {
            User::create([
                'name' => $this->name,
                'surname' => $this->surname,
                'email' => $this->email,
                'password' => Hash::make($this->password), // Хешируем пароль
                'phone' => $this->phone,
                'post' => $this->post,
                'employmentDate' => $this->employmentDate,
                'dateOfBirth' => $this->dateOfBirth,
                'role_id' => $this->role_id,
                'shop_id' => $this->shop_id,
            ]);

            $this->name = '';
            $this->surname = '';
            $this->email = '';
            $this->password = '';
            $this->phone = '';
            $this->post = '';
            $this->employmentDate = null;
            $this->dateOfBirth = null;
            $this->role_id = 0;
            $this->shop_id = 0;
        } catch (\Exception $e) {
            session()->flash('error', 'Произошла ошибка при создании пользователя: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
