<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function tambahData()
    {
        return view('tambahdata');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'pendidikan' => 'required|string|max:255',
        ]);

        // Simpan data pegawai ke dalam database
        try {
            Pegawai::create([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'gaji' => $request->gaji,
                'pendidikan' => $request->pendidikan,
            ]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi kegagalan saat menyimpan data ke database
            return redirect()->back()->with('error', 'Gagal menambahkan data pegawai. Silakan coba lagi.');
        }

        // Redirect ke halaman Master Jabatan
        return redirect()->route('showMasterJabatan')->with('success', 'Data pegawai berhasil ditambahkan.');
    }
}
