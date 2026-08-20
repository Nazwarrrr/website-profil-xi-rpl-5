<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman Profil & Identitas Kelas.
     */
    public function index()
    {
        $identitas = [
            'nama_sekolah'      => 'SMK Negeri Digital Nusantara',
            'program_keahlian'  => 'Rekayasa Perangkat Lunak (RPL)',
            'wali_kelas'        => 'Bpk./Ibu Wali Kelas XI RPL 05',
            'akreditasi'        => 'A — Unggul',
        ];

        $visi = 'Menjadi kelas RPL yang unggul dalam inovasi teknologi, kolaboratif, dan siap bersaing di industri digital.';

        $misi = [
            'Mengembangkan kompetensi pemrograman dan pengembangan perangkat lunak secara berkelanjutan.',
            'Membangun budaya kerja sama tim melalui proyek-proyek kolaboratif.',
            'Menumbuhkan sikap disiplin, tanggung jawab, dan semangat belajar mandiri.',
            'Mempersiapkan lulusan yang siap kerja maupun melanjutkan pendidikan di bidang IT.',
        ];

        $deskripsi = 'XI RPL 05 adalah kelas yang menekankan pembelajaran berbasis proyek nyata, mulai dari perancangan antarmuka, pengembangan aplikasi web dan mobile, hingga manajemen basis data. Suasana belajar dibangun dengan semangat kolaboratif — setiap siswa saling melengkapi peran, mulai dari perencanaan, desain, hingga implementasi teknis.';

        return view('profil.index', compact('identitas', 'visi', 'misi', 'deskripsi'));
    }
}
