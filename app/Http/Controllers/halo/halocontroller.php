<?php

namespace App\Http\Controllers\halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class halocontroller extends Controller
{
    public function sapa()
//     {
//         return '<H1>selamat datang di Sini</H1>';
//     }

    {
        $nama = 'Tom';
        $data = ['namaOrang' => $nama];

        return view('Coba.halo', $data);
    }
}
