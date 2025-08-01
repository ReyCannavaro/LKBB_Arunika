@extends('layouts.app')

@section('title', 'Beranda LKBB Arunika')

@section('content')
    {{-- Pesan jika tidak ada event aktif --}}
    @if ($noActiveEvent)
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative mb-8 text-center" role="alert">
            <strong class="font-bold">Perhatian!</strong>
            <span class="block sm:inline">Belum ada LKBB Arunika yang aktif saat ini. Informasi pendaftaran akan segera diumumkan.</span>
        </div>
    @endif

    {{-- Section untuk Beranda --}}
    <section id="beranda" class="py-16">
        <h2 class="text-4xl font-bold text-center text-red-700 mb-8">Selamat Datang di LKBB Arunika</h2>
        <p class="text-lg text-gray-700 text-center">Ini adalah halaman beranda Anda. Konten utama akan diletakkan di sini.</p>
        <!-- Isi konten beranda di sini -->
        <div class="h-96 bg-gray-200 flex items-center justify-center rounded-lg mt-8">
            <p class="text-gray-600">Konten Beranda (Misal: Slider, Pengumuman Penting)</p>
        </div>
    </section>

    {{-- Section untuk Tentang --}}
    <section id="tentang" class="py-16 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-3xl font-bold text-center text-yellow-600 mb-8">Tentang LKBB Arunika</h2>
        <p class="text-lg text-gray-700 px-4">LKBB Arunika adalah lomba keterampilan baris-berbaris yang bertujuan untuk meningkatkan disiplin, kekompakan, dan semangat kebangsaan generasi muda. Kami berkomitmen untuk menciptakan kompetisi yang sportif dan edukatif.</p>
        <!-- Isi konten tentang di sini -->
        <div class="h-64 bg-gray-100 flex items-center justify-center rounded-lg mt-8 mx-4">
            <p class="text-gray-600">Visi & Misi, Sejarah Event, dll.</p>
        </div>
    </section>

    {{-- Section untuk Juri --}}
    <section id="juri" class="py-16">
        <h2 class="text-3xl font-bold text-center text-red-700 mb-8">Dewan Juri</h2>
        <p class="text-lg text-gray-700 text-center">Kenali para juri profesional yang akan menilai setiap penampilan.</p>
        <!-- Bagian untuk menampilkan daftar juri akan ada di sini -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="https://placehold.co/100x100/F59E0B/FFFFFF?text=Juri1" alt="Juri 1" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl text-gray-800">Nama Juri 1</h4>
                <p class="text-gray-600">Jabatan Juri (contoh: Juri PBB)</p>
                <p class="text-sm text-gray-500 mt-2">Deskripsi singkat tentang juri.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="https://placehold.co/100x100/F59E0B/FFFFFF?text=Juri2" alt="Juri 2" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl text-gray-800">Nama Juri 2</h4>
                <p class="text-gray-600">Jabatan Juri (contoh: Juri Variasi)</p>
                <p class="text-sm text-gray-500 mt-2">Deskripsi singkat tentang juri.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="https://placehold.co/100x100/F59E0B/FFFFFF?text=Juri3" alt="Juri 3" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl text-gray-800">Nama Juri 3</h4>
                <p class="text-gray-600">Jabatan Juri (contoh: Juri Danton)</p>
                <p class="text-sm text-gray-500 mt-2">Deskripsi singkat tentang juri.</p>
            </div>
        </div>
    </section>
@endsection
