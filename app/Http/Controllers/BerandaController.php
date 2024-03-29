<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function show()
    {
        return view('main'); // Sesuaikan dengan nama file blade untuk halaman beranda
    }
}
