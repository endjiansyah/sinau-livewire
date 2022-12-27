<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function clicked()
    {
    }
    public function render()
    {
        $anjay = array(
            array(
                'judul' => 'huanjay',
                'duid' => '5000',
                'isi' => 'aaannnnjjjjaaaaayyyyyyy'
            ),
            array(
                'judul' => 'hilih',
                'duid' => '3000',
                'isi' => 'hilihhhhhhh'
            )
        );

        $data = array(
            'anjay' => $anjay
        );

        return view('livewire.home', $data);
    }
}
