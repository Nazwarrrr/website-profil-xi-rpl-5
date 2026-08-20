@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<section style="padding-bottom: 1.25rem;">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a> <span>/</span> <span style="color:var(--text-secondary);">Profil</span>
        </nav>
        <h1 class="section-title reveal">Profil &amp; Identitas Kelas</h1>
        <p class="section-sub reveal">Mengenal lebih dekat siapa kami, apa yang kami perjuangkan, dan ke arah mana kami melangkah.</p>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container">
        <div class="grid grid-2">

            <div class="card reveal">
                <h3 style="font-size:1.05rem; margin-bottom:1.25rem;">Identitas Utama</h3>
                <div class="info-row">
                    <div>
                        <p>Nama Sekolah</p>
                        <p>{{ $identitas['nama_sekolah'] }}</p>
                    </div>
                </div>
                <div class="info-row">
                    <div>
                        <p>Program Keahlian</p>
                        <p>{{ $identitas['program_keahlian'] }}</p>
                    </div>
                </div>
                <div class="info-row">
                    <div>
                        <p>Wali Kelas</p>
                        <p>{{ $identitas['wali_kelas'] }}</p>
                    </div>
                </div>
                <div class="info-row">
                    <div>
                        <p>Akreditasi</p>
                        <p><span class="role-badge">{{ $identitas['akreditasi'] }}</span></p>
                    </div>
                </div>
            </div>

            <div class="card reveal">
                <h3 style="font-size:1.05rem; margin-bottom:1rem;">Visi &amp; Misi</h3>
                <p style="font-size:0.76rem; color:var(--text-muted); text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.5rem;">Visi</p>
                <p style="color:var(--text-secondary); margin-bottom:1.4rem; font-style:italic;">&ldquo;{{ $visi }}&rdquo;</p>

                <p style="font-size:0.76rem; color:var(--text-muted); text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.6rem;">Misi</p>
                <ul style="list-style:none; display:flex; flex-direction:column; gap:0.7rem;">
                    @foreach ($misi as $item)
                        <li style="display:flex; gap:0.6rem; align-items:flex-start;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top:0.15rem; flex-shrink:0;"><polyline points="20 6 9 17 4 12"/></svg>
                            <span style="color:var(--text-secondary); font-size:0.9rem;">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container">
        <div class="card-flat reveal" style="padding:1.75rem;">
            <h3 style="font-size:1.05rem; margin-bottom:0.8rem;">Suasana &amp; Keahlian Kelas</h3>
            <p style="color:var(--text-secondary); font-size:0.92rem;">{{ $deskripsi }}</p>
        </div>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:1rem; justify-content:space-between; align-items:center;">
        <a href="{{ route('beranda') }}" class="btn btn-ghost">← Kembali ke Beranda</a>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="{{ route('anggota.index') }}" class="btn btn-ghost">Lihat Anggota →</a>
            <a href="{{ route('kontak.index') }}" class="btn btn-primary">Hubungi Kami →</a>
        </div>
    </div>
</section>

@endsection
