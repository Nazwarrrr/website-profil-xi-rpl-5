<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'XI RPL 05') — Digital Space</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stack('styles')
</head>
<body>
<div class="dot-grid"></div>
<div class="wrap">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</div>

<script src="{{ asset('js/common.js') }}"></script>
@stack('scripts')
</body>
</html>
