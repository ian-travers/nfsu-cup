<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public string $submitMessage = '';

    protected array $rules = [
        'name' => 'required|min:3|max:15|regex:/^[A-Za-z0-9_]+$/|unique:users|',
        'email' => 'required|email:filter|unique:users',
        'password' => 'required|min:8|confirmed|regex:/^\S*$/u',
    ];

    public function updatedName()
    {
        $this->validateOnly('name');
    }

    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    public function submitForm()
    {
        $this->validate();

        $this->submitMessage = 'Success';

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
