<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnjayController extends Controller
{
    public function index()
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

        // var_dump($data);

        return view('index', $data);
    }
}
