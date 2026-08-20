<header class="navbar">
    <div class="container navbar-inner">
        <a href="{{ route('beranda') }}" class="brand">
            <div class="brand-mark">XI</div>
            <div class="brand-copy">
                <strong>RPL 05</strong>
                <span>Digital Space</span>
            </div>
        </a>

        <nav class="nav-links">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('profil.index') }}" class="{{ request()->routeIs('profil.*') ? 'active' : '' }}">Profil</a>
            <a href="{{ route('anggota.index') }}" class="{{ request()->routeIs('anggota.*') ? 'active' : '' }}">Anggota</a>
            <a href="{{ route('kontak.index') }}" class="{{ request()->routeIs('kontak.*') ? 'active' : '' }}">Kontak</a>
        </nav>

        <button class="nav-toggle" id="navToggle" aria-label="Buka menu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
    </div>

    <div class="container">
        <nav class="nav-mobile" id="navMobile">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('profil.index') }}" class="{{ request()->routeIs('profil.*') ? 'active' : '' }}">Profil</a>
            <a href="{{ route('anggota.index') }}" class="{{ request()->routeIs('anggota.*') ? 'active' : '' }}">Anggota</a>
            <a href="{{ route('kontak.index') }}" class="{{ request()->routeIs('kontak.*') ? 'active' : '' }}">Kontak</a>
        </nav>
    </div>
</header>
