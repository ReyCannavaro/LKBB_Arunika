<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin LKBB ARUNIKA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white p-6">
      <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
      <nav>
        <ul>
          <li class="mb-4"><a href="#" class="hover:text-gray-400">Dashboard</a></li>
          <li class="mb-4"><a href="#" class="hover:text-gray-400">Juri</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h2 class="text-3xl font-semibold mb-6">Dashboard</h2>

      <!-- Stats Section -->
      <div class="grid grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-medium">Total Tim</h3>
          <p class="text-3xl font-bold">30</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-medium">Total Peserta</h3>
          <p class="text-3xl font-bold">200</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-medium">Pembayaran Terverifikasi</h3>
          <p class="text-3xl font-bold">18</p>
        </div>
      </div>

      <!-- Recent Registrations -->
      <h3 class="text-2xl font-semibold mb-4">Tim Terbaru</h3>
      <table class="w-full bg-white rounded-lg shadow-md">
        <thead>
          <tr class="text-left border-b">
            <th class="p-4">Nama Tim</th>
            <th class="p-4">Jumlah Anggota</th>
            <th class="p-4">Status Verifikasi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-4">Tim Garuda</td>
            <td class="p-4">15</td>
            <td class="p-4 text-green-500">Terverifikasi</td>
          </tr>
          <tr class="border-b">
            <td class="p-4">Tim Nusantara</td>
            <td class="p-4">18</td>
            <td class="p-4 text-yellow-500">Menunggu Verifikasi</td>
          </tr>
          <tr>
            <td class="p-4">Tim Merah Putih</td>
            <td class="p-4">20</td>
            <td class="p-4 text-red-500">Ditolak</td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>