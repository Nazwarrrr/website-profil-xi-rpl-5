@extends('layouts.app')

@section('title', 'Anggota')

@section('content')

<section style="padding-bottom: 1.25rem;">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a> <span>/</span> <span style="color:var(--text-secondary);">Anggota</span>
        </nav>
        <h1 class="section-title reveal">Struktur Organisasi &amp; Anggota Tim</h1>
        <p class="section-sub reveal">Empat peran inti di balik pengembangan Website Profil XI RPL 05.</p>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container">
        <div class="grid grid-4">
            @foreach ($anggota as $member)
                <div class="card reveal" style="text-align:center;">
                    <span class="role-badge">{{ $member['role'] }}</span>
                    <img class="member-photo" src="{{ $member['foto'] }}" alt="Foto {{ $member['nama'] }}" style="margin-left:auto; margin-right:auto; display:block;">
                    <h4 style="font-size:1rem; margin-bottom:0.2rem;">{{ $member['nama'] }}</h4>
                    <p style="color:var(--text-muted); font-size:0.8rem; margin-bottom:0.4rem;">{{ $member['bio'] }}</p>
                    <div class="skill-tags" style="justify-content:center;">
                        @foreach ($member['skill'] as $skill)
                            <span class="skill-tag">#{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:1rem; justify-content:space-between; align-items:center;">
        <a href="{{ route('beranda') }}" class="btn btn-ghost">← Kembali ke Beranda</a>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="{{ route('profil.index') }}" class="btn btn-ghost">Lihat Profil →</a>
            <a href="{{ route('kontak.index') }}" class="btn btn-primary">Hubungi Kami →</a>
        </div>
    </div>
</section>

@endsection
