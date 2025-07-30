<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKBB ARUNIKA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden mx-auto py-6">
        <nav class="flex items-center justify-end gap-4">
            <a
                href="{{ route('login') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Log in
            </a>

            <a
                href="{{ route('register') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Register
            </a>
        </nav>
    </header>

    <main class="text-center py-20">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di LKBB ARUNIKA</h1>
        <p class="text-lg text-gray-600 mb-8">Platform pendaftaran Lomba Keterampilan Baris Berbaris (LKBB) Arunika</p>
        <a href="{{ route('register') }}" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Daftar Sekarang</a>
    </main>

    <footer class="text-center py-6 text-gray-500">
        &copy; 2025 LKBB-ARUNIKA. All rights reserved.
    </footer>
</body>
</html>
