<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Warungku</title>
  @vite('resources/css/app.css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="//unpkg.com/alpinejs" defer></script>
  </head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Hamburger Button (Mobile Only) -->
    <button @click="sidebarOpen = true" class="md:hidden fixed top-4 left-4 z-50 p-2 bg-white rounded shadow">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Sidebar -->
    <aside 
      :class="{'-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen}"
      class="fixed inset-y-0 left-0 z-30 w-64 bg-white shadow-md transform transition-transform duration-200 ease-in-out md:translate-x-0 md:relative"
      @click.away="sidebarOpen = false"
    >
      <div class="p-6">
        <h1 class="text-2xl font-bold text-blue-600">Warungku</h1>
      </div>
      <nav class="mt-8">
        <!-- Menu Items -->
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Dashboard</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Transaksi</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Produk</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Laporan</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Pengaturan</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Utang & Piutang</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">Kalkulator Harga</a>
      </nav>
      
      <!-- Close Button (Mobile Only) -->
      <button 
        @click="sidebarOpen = false" 
        class="absolute top-4 right-4 md:hidden"
      >
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h2 class="text-xl font-semibold">Dashboard</h2>
        <div class="flex items-center">
          <span class="mr-4">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
      </header>

      <!-- Konten -->
      <main class="p-6 flex-1 overflow-auto">
        <!-- Kartu Informasi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <!-- Card 1: Total Penjualan -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-blue-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 7H7v6h6V7z"/>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Total Penjualan</p>
                <p class="text-2xl font-bold">Rp 1.200.000</p>
              </div>
            </div>
          </div>

          <!-- Card 2: Transaksi Hari Ini -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-green-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M3 3h14v2H3V3zm0 4h14v2H3V7zm0 4h14v2H3v-2zm0 4h14v2H3v-2z"/>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Transaksi Hari Ini</p>
                <p class="text-2xl font-bold">15</p>
              </div>
            </div>
          </div>

          <!-- Card 3: Produk Tersedia -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-yellow-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"/>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Produk Tersedia</p>
                <p class="text-2xl font-bold">200</p>
              </div>
            </div>
          </div>

          <!-- Card 4: Stok Menipis -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-red-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2C5.58 2 2 5.58 2 10s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 12H9v-2h2v2zm0-4H9V5h2v5z"/>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Stok Menipis</p>
                <p class="text-2xl font-bold">5</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabel Data Penjualan -->
        <div class="bg-white shadow rounded-lg p-6">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">Data Penjualan Terbaru</h3>
            <!-- Input kalender untuk memilih tanggal penjualan -->
            <input type="date" class="border rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b text-left">ID</th>
                  <th class="px-4 py-2 border-b text-left">Nama Produk</th>
                  <th class="px-4 py-2 border-b text-left">Jumlah</th>
                  <th class="px-4 py-2 border-b text-left">Total</th>
                  <th class="px-4 py-2 border-b text-left">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">1</td>
                  <td class="px-4 py-2 border-b">Produk A</td>
                  <td class="px-4 py-2 border-b">3</td>
                  <td class="px-4 py-2 border-b">Rp 300.000</td>
                  <td class="px-4 py-2 border-b">2025-01-01</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">2</td>
                  <td class="px-4 py-2 border-b">Produk B</td>
                  <td class="px-4 py-2 border-b">2</td>
                  <td class="px-4 py-2 border-b">Rp 200.000</td>
                  <td class="px-4 py-2 border-b">2025-01-02</td>
                </tr>
                <!-- Tambahkan data lain sesuai kebutuhan -->
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
