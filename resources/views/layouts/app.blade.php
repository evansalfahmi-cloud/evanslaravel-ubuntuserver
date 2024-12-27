<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Evans Project')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('evn.png') }}">

    <!-- Vite: Import CSS dan JS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.header')
<div class="d-flex flex-column min-vh-100">
    <main class="flex-grow-1 container my-5">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</div>
</html>
