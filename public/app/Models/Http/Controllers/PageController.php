<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function layout()
    {
        $mahasiswa = [
            'nama' => 'Misca Octavia',
            'kelas' => 'PSIK 25D',
            'semester' => 3
        ];

        return view('layout', compact('mahasiswa'));
    }

    public function contact()
    {
        return view('contact');
    }
}
