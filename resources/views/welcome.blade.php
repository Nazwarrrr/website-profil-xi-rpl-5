@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section style="padding-top: 4.5rem; padding-bottom: 2.5rem;">
    <div class="container" style="text-align:center; max-width: 44rem;">
        <span class="eyebrow reveal">Sistem Informasi &amp; Portfolio Kelas</span>
        <h1 class="hero-title reveal">
            Welcome to <span class="accent-text">XI RPL 05</span> Digital Space
        </h1>
        <p class="section-sub reveal" style="margin: 0 auto 2rem;">
            Ruang digital resmi kelas XI RPL 05 — tempat kami memperkenalkan identitas kelas,
            anggota tim, serta membuka jalur komunikasi untuk kolaborasi dan informasi lebih lanjut.
        </p>
        <div class="reveal" style="display:flex; gap:0.9rem; justify-content:center; flex-wrap:wrap;">
            <a href="#fitur" class="btn btn-primary">Jelajahi Fitur</a>
            <a href="{{ route('kontak.index') }}" class="btn btn-ghost">Hubungi Kami</a>
        </div>
    </div>
</section>

<section id="fitur">
    <div class="container">
        <div class="grid grid-3">

            <div class="card reveal">
                <div class="icon-tile">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>
                </div>
                <h3 style="font-size:1.1rem; margin-bottom:0.5rem;">Profil Kelas</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem; margin-bottom:1.4rem;">
                    Kenali identitas, visi, dan misi XI RPL 05 — mulai dari program keahlian hingga suasana belajar sehari-hari.
                </p>
                <a href="{{ route('profil.index') }}" class="btn btn-ghost btn-block">Lihat Profil Lengkap →</a>
            </div>

            <div class="card reveal">
                <div class="icon-tile">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 style="font-size:1.1rem; margin-bottom:0.5rem;">Anggota Tim</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem; margin-bottom:0.4rem;">
                    Siswa aktif tergabung dalam struktur organisasi kelas dengan peran masing-masing.
                </p>
                <p class="stat-value" style="font-size:1.5rem; margin-bottom:1rem;">36 Anggota</p>
                <a href="{{ route('anggota.index') }}" class="btn btn-ghost btn-block">Lihat Tim &amp; Struktur →</a>
            </div>

            <div class="card reveal">
                <div class="icon-tile">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <h3 style="font-size:1.1rem; margin-bottom:0.5rem;">Kontak</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem; margin-bottom:1.4rem;">
                    Ada pertanyaan atau ajakan kolaborasi? Kirimkan pesan langsung ke kami.
                </p>
                <a href="{{ route('kontak.index') }}" class="btn btn-ghost btn-block">Hubungi Kami →</a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="card-flat reveal" style="padding:2.25rem 1.5rem;">
            <div class="grid grid-3" style="text-align:center;">
                <div>
                    <p class="stat-value" data-count="36">0</p>
                    <p class="stat-label">Jumlah Siswa</p>
                </div>
                <div>
                    <p class="stat-value" data-count="24">0</p>
                    <p class="stat-label">Jumlah Proyek</p>
                </div>
                <div>
                    <p class="stat-value" data-count="97">0</p>
                    <p class="stat-label">% Tingkat Kehadiran</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
@endpush
