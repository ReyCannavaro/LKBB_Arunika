@extends('layouts.app')

@section('title', 'Beranda LKBB Arunika')

@section('content')
    {{-- Hero Section dengan Background Gambar --}}
    {{-- Menghilangkan padding/margin di sekitar section untuk kesan "tanpa tepi" --}}
    <section id="beranda" class="relative py-24 md:py-32 lg:py-40 bg-cover bg-center overflow-hidden shadow-2xl" style="background-image: url('{{ asset('images/assether3.jpeg') }}');">
        {{-- Overlay untuk membuat teks lebih mudah dibaca --}}
        <div class="absolute inset-0 bg-black opacity-70"></div> {{-- Opacity ditingkatkan menjadi 70% untuk kontras lebih baik --}}
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            {{-- Konten Hero: Rata kiri --}}
            <div class="text-left text-white max-w-2xl"> {{-- Teks di hero section kini berwarna putih, max-width untuk kontrol lebar --}}
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    Selamat Datang di <br><span class="text-yellow-400">LKBB Arunika</span> {{-- Menggunakan yellow-400 untuk aksen --}}
                </h1>
                <p class="mt-4 text-lg md:text-xl">
                    Platform pendaftaran Lomba Keterampilan Baris Berbaris (LKBB) Arunika. Tingkatkan disiplin, kekompakan, dan semangat kebangsaan tim Anda!
                </p>
                <div class="mt-8 flex space-x-4"> {{-- Tombol tetap dipertahankan --}}
                    @if ($noActiveEvent)
                        <span class="px-6 py-3 bg-gray-400 text-white rounded-lg cursor-not-allowed font-semibold transition duration-300 shadow-md">
                            Belum Ada Lomba
                        </span>
                    @else
                        <a href="{{ route('registteam') }}" class="px-6 py-3 bg-red-700 text-white rounded-lg hover:bg-red-800 font-semibold transition duration-300 shadow-md">
                            Daftar Sekarang
                        </a>
                    @endif
                    <a href="#tentang" class="px-6 py-3 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 font-semibold transition duration-300 shadow-md">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Pesan jika tidak ada event aktif (tetap di luar hero, akan muncul sebagai pop-up) --}}
    @if ($noActiveEvent)
        {{-- Ini adalah placeholder, pop-up akan menangani notifikasi --}}
    @endif

    {{-- Section About Us --}}
    <section id="tentang" class="bg-white py-16 rounded-lg shadow-xl mt-8">
        <div class="container mx-auto px-4 md:px-6 flex flex-col-reverse lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 relative mt-8 lg:mt-0">
                <img src="https://placehold.co/600x400/A52A2A/FFFFFF?text=Tim+LKBB+Arunika" alt="Tim LKBB Arunika" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-extrabold text-red-700">
                    Tentang Kami
                </h2>
                <p class="mt-4 text-lg text-gray-700">
                    LKBB Arunika adalah lomba keterampilan baris-berbaris yang bertujuan untuk meningkatkan disiplin, kekompakan, dan semangat kebangsaan generasi muda. Kami berkomitmen untuk menciptakan kompetisi yang sportif dan edukatif.
                </p>
                <ul class="mt-6 space-y-3 text-gray-700 text-left mx-auto lg:mx-0 max-w-xl">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-2 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Meningkatkan Disiplin dan Karakter</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-2 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Mendorong Kerja Sama Tim</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-2 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Mewujudkan Kompetisi yang Sportif</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Section Juri --}}
    <section id="juri" class="py-16">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-red-700 mb-8">
                Dewan Juri
            </h2>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-12">
                Kenali para juri profesional yang akan menilai setiap penampilan tim dengan objektivitas dan pengalaman terbaik.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Juri Card 1 --}}
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="https://placehold.co/120x120/FFD700/FFFFFF?text=Juri1" alt="Juri 1" class="rounded-full mx-auto w-32 h-32 object-cover mb-4 border-4 border-yellow-600">
                    <h4 class="font-bold text-xl text-gray-800">Nama Juri 1</h4>
                    <p class="text-yellow-600 font-semibold mt-1">Spesialis PBB Murni</p>
                    <p class="text-sm text-gray-500 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                {{-- Juri Card 2 --}}
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="https://placehold.co/120x120/FFD700/FFFFFF?text=Juri2" alt="Juri 2" class="rounded-full mx-auto w-32 h-32 object-cover mb-4 border-4 border-yellow-600">
                    <h4 class="font-bold text-xl text-gray-800">Nama Juri 2</h4>
                    <p class="text-yellow-600 font-semibold mt-1">Spesialis Variasi & Formasi</p>
                    <p class="text-sm text-gray-500 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                {{-- Juri Card 3 --}}
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="https://placehold.co/120x120/FFD700/FFFFFF?text=Juri3" alt="Juri 3" class="rounded-full mx-auto w-32 h-32 object-cover mb-4 border-4 border-yellow-600">
                    <h4 class="font-bold text-xl text-gray-800">Nama Juri 3</h4>
                    <p class="text-yellow-600 font-semibold mt-1">Spesialis Danton & Kostum</p>
                    <p class="text-sm text-gray-500 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section CTA --}}
    <section id="cta" class="bg-red-700 py-16 mt-8 rounded-lg shadow-xl">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
                Siap Menjadi Bagian dari LKBB Arunika?
            </h2>
            <p class="text-lg text-red-200 max-w-2xl mx-auto">
                Daftarkan tim terbaik Anda dan raih kemenangan.
            </p>
            <a href="{{ route('registteam') }}" class="mt-8 inline-block px-8 py-3 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 font-semibold transition duration-300 shadow-md">
                Daftar Sekarang
            </a>
        </div>
    </section>

    {{-- Modal Pop-up untuk Notifikasi Event Tidak Aktif --}}
    <div id="no-event-modal" class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center z-50 hidden transition-opacity duration-300 ease-out opacity-0">
        <div class="bg-white p-6 rounded-lg shadow-2xl max-w-sm w-full text-center relative transform transition-all duration-300 ease-out scale-95">
            <h3 class="text-2xl font-bold text-yellow-600 mb-4">Perhatian!</h3>
            <p class="text-lg text-gray-700 mb-6">
                Belum ada LKBB Arunika yang aktif saat ini. Informasi pendaftaran akan segera diumumkan.
            </p>
            <button id="close-modal-btn" class="px-6 py-3 bg-red-700 text-white rounded-lg hover:bg-red-800 font-semibold transition duration-300 shadow-md">
                Tutup
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // JavaScript untuk menampilkan pop-up jika tidak ada event aktif
        document.addEventListener('DOMContentLoaded', function() {
            const noActiveEvent = {{ $noActiveEvent ? 'true' : 'false' }};
            const modal = document.getElementById('no-event-modal');
            const modalContent = modal.querySelector('div'); // Ambil div konten modal
            const closeModalBtn = document.getElementById('close-modal-btn');

            if (noActiveEvent) {
                modal.classList.remove('hidden');
                setTimeout(() => { // Beri sedikit delay untuk transisi
                    modal.classList.remove('opacity-0');
                    modalContent.classList.remove('scale-95');
                    modalContent.classList.add('opacity-100', 'scale-100');
                }, 10);
            }

            closeModalBtn.addEventListener('click', function() {
                modal.classList.add('opacity-0');
                modalContent.classList.remove('opacity-100', 'scale-100');
                modalContent.classList.add('scale-95');
                setTimeout(() => { // Sembunyikan setelah transisi selesai
                    modal.classList.add('hidden');
                }, 300); // Sesuaikan dengan durasi transisi
            });

            // Opsional: Tutup modal jika klik di luar area modal
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('opacity-0');
                    modalContent.classList.remove('opacity-100', 'scale-100');
                    modalContent.classList.add('scale-95');
                    setTimeout(() => {
                        modal.classList.add('hidden');
                    }, 300);
                }
            });
        });
    </script>
@endsection
