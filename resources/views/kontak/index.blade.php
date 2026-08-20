@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<section style="padding-bottom: 1.25rem;">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a> <span>/</span> <span style="color:var(--text-secondary);">Kontak</span>
        </nav>
        <h1 class="section-title reveal">Hubungi &amp; Layanan Informasi</h1>
        <p class="section-sub reveal">Punya pertanyaan, masukan, atau ajakan kolaborasi? Kami senang mendengarnya.</p>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container">
        <div class="grid grid-2">

            <div class="card reveal">
                <h3 style="font-size:1.05rem; margin-bottom:0.3rem;">Informasi Kontak</h3>
                <p style="color:var(--text-muted); font-size:0.82rem; margin-bottom:0.5rem;">Hubungi kami melalui salah satu kanal berikut.</p>

                <div class="info-row">
                    <div class="icon-tile" style="margin-bottom:0;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
                    </div>
                    <div><p>Email Resmi</p><p>{{ $kontak['email'] }}</p></div>
                </div>
                <div class="info-row">
                    <div class="icon-tile" style="margin-bottom:0;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </div>
                    <div><p>Instagram Kelas</p><p>{{ $kontak['instagram'] }}</p></div>
                </div>
                <div class="info-row">
                    <div class="icon-tile" style="margin-bottom:0;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div><p>Alamat Sekolah</p><p>{{ $kontak['alamat'] }}</p></div>
                </div>
                <div class="info-row">
                    <div class="icon-tile" style="margin-bottom:0;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div><p>Jam Pembelajaran</p><p>{{ $kontak['jam'] }}</p></div>
                </div>
            </div>

            <div class="card reveal">
                <h3 style="font-size:1.05rem; margin-bottom:0.3rem;">Kirim Pesan</h3>
                <p style="color:var(--text-muted); font-size:0.82rem; margin-bottom:1.1rem;">Isi form di bawah ini, kami akan segera merespons.</p>

                @if (session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('kontak.store') }}" method="POST">
                    @csrf

                    <div class="field">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama lengkap kamu" value="{{ old('nama') }}">
                        @error('nama') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="nama@email.com" value="{{ old('email') }}">
                        @error('email') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="subjek">Subjek</label>
                        <input type="text" id="subjek" name="subjek" placeholder="Topik pesan kamu" value="{{ old('subjek') }}">
                        @error('subjek') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan kamu di sini...">{{ old('pesan') }}</textarea>
                        @error('pesan') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                </form>
            </div>

        </div>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:1rem; justify-content:space-between; align-items:center;">
        <a href="{{ route('beranda') }}" class="btn btn-ghost">← Kembali ke Beranda</a>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="{{ route('profil.index') }}" class="btn btn-ghost">Lihat Profil →</a>
            <a href="{{ route('anggota.index') }}" class="btn btn-ghost">Lihat Anggota →</a>
        </div>
    </div>
</section>

@endsection
