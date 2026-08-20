<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Menampilkan halaman Struktur Organisasi & Anggota Tim.
     */
    public function index()
    {
        $anggota = [
            [
                'nama'  => 'Rangga Aditya',
                'role'  => 'Project Manager',
                'foto'  => 'https://ui-avatars.com/api/?name=Rangga+Aditya&background=6D5EF5&color=fff&size=128&bold=true',
                'skill' => ['Leadership', 'Planning', 'Laravel'],
                'bio'   => 'Mengelola alur proyek & landing page.',
            ],
            [
                'nama'  => 'Sinta Maharani',
                'role'  => 'Developer Profil',
                'foto'  => 'https://ui-avatars.com/api/?name=Sinta+Maharani&background=6D5EF5&color=fff&size=128&bold=true',
                'skill' => ['Blade', 'UI Design', 'CSS'],
                'bio'   => 'Membangun modul Profil & Identitas Kelas.',
            ],
            [
                'nama'  => 'Fajar Nugraha',
                'role'  => 'Developer Anggota',
                'foto'  => 'https://ui-avatars.com/api/?name=Fajar+Nugraha&background=6D5EF5&color=fff&size=128&bold=true',
                'skill' => ['Git', 'Laravel', 'Grid Layout'],
                'bio'   => 'Merancang tampilan daftar & struktur tim.',
            ],
            [
                'nama'  => 'Dewi Lestari',
                'role'  => 'Developer Kontak',
                'foto'  => 'https://ui-avatars.com/api/?name=Dewi+Lestari&background=6D5EF5&color=fff&size=128&bold=true',
                'skill' => ['Forms', 'JavaScript', 'Validation'],
                'bio'   => 'Mengembangkan modul informasi & form kontak.',
            ],
        ];

        return view('anggota.index', compact('anggota'));
    }
}
