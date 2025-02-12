<!DOCTYPE html>
<html lang="id" x-data>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan - Warungku</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Muat AlpineJS -->
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- Optional: Muat Chart.js untuk grafik -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  @php
    // Set menu aktif menjadi 'laporan'
    $activeMenu = $activeMenu ?? 'laporan';
  @endphp

  <!-- Container Utama -->
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar Desktop -->
    <aside class="hidden md:block w-64 bg-white shadow-md">
      <div class="p-6">
        <h1 class="text-2xl font-bold text-blue-600">Warungku</h1>
      </div>
      <nav class="mt-8">
        <a href="{{ route('dashboard') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'dashboard' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Dashboard
        </a>
        <a href="{{ url('/transaksi') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'transaksi' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Transaksi
        </a>
        <a href="{{ url('/produk') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'produk' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Produk
        </a>
        <a href="{{ url('/laporan') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'laporan' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Laporan
        </a>
        <a href="#"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Pengaturan
        </a>
        <a href="#"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Utang & Piutang
        </a>
        <a href="#"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Kalkulator Harga
        </a>
      </nav>
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64 overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h2 class="text-xl font-semibold">Laporan</h2>
        <div class="flex items-center">
          <span class="mr-4">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
      </header>
      <!-- Area Konten -->
      <main class="p-6 flex-1 overflow-auto">
        <h1 class="text-3xl font-bold mb-4">Laporan Penjualan & Transaksi</h1>
        <p class="text-gray-700 mb-6">
          Berikut adalah laporan ringkas dari penjualan, transaksi, dan performa produk di Warungku.
        </p>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <!-- Card 1: Total Penjualan -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-blue-100 p-3 rounded-full">
                <!-- Contoh ikon -->
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 7H7v6h6V7z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Total Penjualan</p>
                <p class="text-2xl font-bold">Rp 10.000.000</p>
              </div>
            </div>
          </div>
          <!-- Card 2: Total Transaksi -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-green-100 p-3 rounded-full">
                <!-- Contoh ikon -->
                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M3 3h14v2H3V3zm0 4h14v2H3V7zm0 4h14v2H3v-2zm0 4h14v2H3v-2z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Total Transaksi</p>
                <p class="text-2xl font-bold">120</p>
              </div>
            </div>
          </div>
          <!-- Card 3: Produk Terlaris -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-yellow-100 p-3 rounded-full">
                <!-- Contoh ikon -->
                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Produk Terlaris</p>
                <p class="text-2xl font-bold">Produk A</p>
              </div>
            </div>
          </div>
          <!-- Card 4: Keuntungan -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-red-100 p-3 rounded-full">
                <!-- Contoh ikon -->
                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2C5.58 2 2 5.58 2 10s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 12H9v-2h2v2zm0-4H9V5h2v5z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Keuntungan</p>
                <p class="text-2xl font-bold">Rp 3.000.000</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-white shadow rounded-lg p-6 mb-6">
          <h3 class="text-lg font-semibold mb-4">Grafik Penjualan Bulanan</h3>
          <!-- Canvas untuk Chart.js -->
          <div class="w-full h-64">
            <canvas id="salesChart" class="w-full h-full"></canvas>
          </div>
        </div>

        <!-- Tabel Transaksi -->
        <div class="bg-white shadow rounded-lg p-6">
          <h3 class="text-lg font-semibold mb-4">Detail Transaksi Terbaru</h3>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b text-left">ID</th>
                  <th class="px-4 py-2 border-b text-left">Tanggal</th>
                  <th class="px-4 py-2 border-b text-left">Deskripsi</th>
                  <th class="px-4 py-2 border-b text-left">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">1</td>
                  <td class="px-4 py-2 border-b">2025-01-01</td>
                  <td class="px-4 py-2 border-b">Penjualan Produk A</td>
                  <td class="px-4 py-2 border-b">Rp 500.000</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">2</td>
                  <td class="px-4 py-2 border-b">2025-01-02</td>
                  <td class="px-4 py-2 border-b">Penjualan Produk B</td>
                  <td class="px-4 py-2 border-b">Rp 300.000</td>
                </tr>
                <!-- Tambahkan baris transaksi lainnya sesuai kebutuhan -->
              </tbody>
            </table>
          </div>
        </div>

      </main>
    </div>
  </div>

  <!-- Script untuk Chart.js -->
  <script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
          label: 'Penjualan',
          data: [1200, 1900, 3000, 5000, 2000, 3000, 4000, 3500, 4000, 4500, 5000, 6000],
          backgroundColor: 'rgba(59, 130, 246, 0.5)',
          borderColor: 'rgba(59, 130, 246, 1)',
          borderWidth: 2,
          fill: true,
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      }
    });
  </script>
</body>
</html>
