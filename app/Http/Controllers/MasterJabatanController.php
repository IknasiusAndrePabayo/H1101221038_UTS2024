<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterJabatanController extends Controller
{

    public function show()
    {
        // Data pegawai statis
        $pegawai = [
            [
                'nama' => 'John Doe',
                'jabatan' => 'Manager',
                'gaji' => 10000000,
                'pendidikan' => 'S1'
            ],
            [
                'nama' => 'Jane Smith',
                'jabatan' => 'Supervisor',
                'gaji' => 8000000,
                'pendidikan' => 'D3'
            ],
            // Tambahkan data pegawai lainnya sesuai kebutuhan
        ];

        // Kirim data ke tampilan Master Jabatan
        return view('masterjabatan', compact('pegawai'));
    }
}
