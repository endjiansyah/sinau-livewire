<?php

namespace App\Http\Livewire\Cards;

use Livewire\Component;

class Products extends Component
{
    public $hilih;

    //procedure
    public function kurangiduid()
    {
        $this->hilih['duid'] -= 2000;
    }

    //function
    public function render()
    {
        $this->kurangiduid();
        return view('livewire.cards.product', $this->hilih);
    }
}
