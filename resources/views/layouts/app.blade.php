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
    <header class="bg-white bg-opacity-70 text-gray-800 p-4 sticky top-0 z-50 transition-shadow duration-300 ease-in-out backdrop-blur-md" id="main-header"> 
        <div class="container mx-auto flex justify-between items-center relative">
            {{-- Logo di Kiri --}}
            <div class="flex items-center absolute left-0 ml-4">
                <img src="{{ asset('images/logo-arunika.png') }}" alt="Logo LKBB Arunika" class="h-12 mr-3">
            </div>

            {{-- Navigasi di Tengah --}}
            <nav class="flex-grow flex justify-center">
                <ul class="flex space-x-8">
                    <li><a href="{{ route('home.index') }}#beranda" class="hover:text-red-700 transition duration-300">Beranda</a></li>
                    <li><a href="{{ route('home.index') }}#tentang" class="hover:text-red-700 transition duration-300">Tentang</a></li>
                    <li><a href="{{ route('home.index') }}#juri" class="hover:text-red-700 transition duration-300">Juri</a></li>
                    <li><a href="{{ route('registteam') }}" class="hover:text-red-700 transition duration-300">Daftar</a></li>
                </ul>
            </nav>

            {{-- Logo Akun di Ujung Kanan (Conditional) --}}
            <div class="absolute right-0 mr-4 flex items-center space-x-2">
                @auth 
                    <a href="{{ route('home.index') }}" class="flex items-center space-x-2 text-gray-800 hover:text-red-700 transition duration-300">
                        <svg class="h-8 w-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Akun Saya</span>
                    </a>
                @else 
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-red-700 text-white rounded-md hover:bg-red-800 transition duration-300 shadow-md">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-red-700 text-red-700 rounded-md hover:bg-red-50 transition duration-300 shadow-md">Register</a>
                @endauth
            </div>
        </div>
    </header>

    {{-- Konten Utama --}}
    <main class="flex-grow container mx-auto"> 
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white p-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} LKBB Arunika. Hak Cipta Dilindungi.</p>
            <p class="text-sm mt-2">Dibuat dengan semangat untuk generasi muda.</p>
        </div>
    </footer>

    {{-- Tombol Chat --}}
    <button id="chat-button" class="fixed bottom-6 right-6 bg-yellow-600 text-white p-4 rounded-full shadow-lg hover:bg-yellow-700 transition duration-300 z-50 flex items-center justify-center w-14 h-14">
        {{-- Icon Chat (dari Heroicons/Lucide) --}}
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
    </button>

    @yield('scripts') {{-- Untuk JS spesifik halaman --}}
    <script>
        // JavaScript untuk menambahkan shadow pada header saat di-scroll
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // Tambahkan shadow setelah scroll 50px
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // JavaScript untuk fungsionalitas tombol chat
        document.getElementById('chat-button').addEventListener('click', () => {
            // Untuk sementara, kita bisa menampilkan alert atau log ke konsol
            alert('Halo! Ada yang bisa kami bantu? Silakan hubungi tim LKBB Arunika.');
            // Di masa depan, ini bisa membuka modal chat, mengarahkan ke WhatsApp, dll.
        });
    </script>
</body>
</html>
