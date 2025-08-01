<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LKBB Arunika - @yield('title', 'Website Resmi')</title>
    
    {{-- Menggunakan Vite untuk mengkompilasi CSS dan JS lokal --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Anda bisa menambahkan CSS atau JS global lainnya di sini --}}
    @yield('styles') {{-- Untuk CSS spesifik halaman --}}
    <style>
        /* Optional: Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    {{-- Header --}}
    <header class="bg-red-700 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center relative">
            {{-- Logo di Kiri --}}
            <div class="flex items-center absolute left-0 ml-4">
                {{-- Pastikan Anda menempatkan file logo (misal: LKBB ARUNIKA 8.png) di folder public/images/ --}}
                <img src="{{ asset('images/logo-arunika.png') }}" alt="Logo LKBB Arunika" class="h-12 mr-3">
            </div>

            {{-- Navigasi di Tengah --}}
            <nav class="flex-grow flex justify-center">
                <ul class="flex space-x-8">
                    {{-- Link anchor untuk scroll ke section di halaman yang sama (beranda.blade.php) --}}
                    <li><a href="{{ route('home.index') }}#beranda" class="hover:text-red-200">Beranda</a></li>
                    <li><a href="{{ route('home.index') }}#tentang" class="hover:text-red-200">Tentang</a></li>
                    <li><a href="{{ route('home.index') }}#juri" class="hover:text-red-200">Juri</a></li>
                    {{-- Tombol Daftar akan diarahkan ke registteam.blade.php --}}
                    <li><a href="{{ route('registteam') }}" class="hover:text-red-200">Daftar</a></li>
                </ul>
            </nav>

            {{-- Logo Akun di Ujung Kanan (Conditional) --}}
            <div class="absolute right-0 mr-4">
                @auth {{-- Laravel Blade directive: tampilkan jika user login --}}
                    {{-- Mengarahkan ke route home.index sebagai halaman profil sementara --}}
                    <a href="{{ route('home.index') }}" class="flex items-center space-x-2 hover:text-red-200">
                        {{-- Placeholder untuk logo akun. Anda bisa menggantinya dengan avatar user atau ikon --}}
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                @else {{-- Tampilkan jika user belum login --}}
                    <a href="{{ route('login') }}" class="hover:text-red-200">Login</a>
                @endauth
            </div>
        </div>
    </header>

    {{-- Konten Utama --}}
    <main class="flex-grow container mx-auto p-6">
        {{-- Ini adalah placeholder untuk konten spesifik halaman --}}
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white p-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} LKBB Arunika. Hak Cipta Dilindungi.</p>
            <p class="text-sm mt-2">Dibuat dengan semangat untuk generasi muda.</p>
        </div>
    </footer>

    @yield('scripts') {{-- Untuk JS spesifik halaman --}}
</body>
</html>
