<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email'
    ];

    public function submit()
    {
        $this->validate();
    }

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.form.contact');
    }
}
