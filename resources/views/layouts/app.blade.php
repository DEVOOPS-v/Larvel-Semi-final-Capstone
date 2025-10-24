<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Vetsync')</title>
    
    {{-- Lucide Icon --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS (CDN) -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- App CSS (Vite) -->
    @vite(['resources/css/app.css'])
    <!-- Font Awesome -->
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" 
    integrity="sha512-..." 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />

    <!-- Per-page styles -->
    @stack('styles')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="font-sans antiliased bg-white text-gray-800">
    <!-- Navs here -->
    @include('partials.navbar')


    <main class="min-h-screen w-full">
        @yield('content')
    </main>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- App JS (Vite) -->
    @vite(['resources/js/app.js'])
w
    <!-- Per-page scripts -->
    @stack('scripts')



    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>