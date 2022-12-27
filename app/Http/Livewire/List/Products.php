<?php

namespace App\Http\Livewire\List;

use Livewire\Component;

class Products extends Component
{
    public $products;

    public function render()
    {
        // dd($this->products);
        return view('livewire.list.products');
    }
}
