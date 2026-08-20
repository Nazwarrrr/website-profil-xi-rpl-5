<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Menampilkan halaman Hubungi & Layanan Informasi.
     */
    public function index()
    {
        $kontak = [
            'email'     => 'xirpl05@sekolahdigital.sch.id',
            'instagram' => '@xi_rpl05',
            'alamat'    => 'Jl. Pendidikan Digital No. 5, Bandung',
            'jam'       => 'Senin – Jumat, 07.00 – 15.30 WIB',
        ];

        return view('kontak.index', compact('kontak'));
    }

    /**
     * Memproses pengiriman form kontak.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|max:150',
            'subjek' => 'required|string|max:150',
            'pesan'  => 'required|string|max:2000',
        ]);

        // TODO: simpan ke database atau kirim email, contoh:
        // Mail::to('xirpl05@sekolahdigital.sch.id')->send(new PesanKontak($validated));

        return back()->with('success', 'Terima kasih, ' . $validated['nama'] . '! Pesan kamu sudah kami terima.');
    }
}
