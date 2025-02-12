<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: window.innerWidth >= 768 }" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Warungku</title>
  <!-- Memanggil asset CSS dan JS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="//unpkg.com/alpinejs" defer></script>
  <style>
    /* Pastikan elemen yang memakai x-cloak tidak terlihat sebelum Alpine.js siap */
    [x-cloak] { display: none; }
  </style>
</head>
<body class="bg-gray-100 h-full overflow-x-hidden">

  @php
    $activeMenu = $activeMenu ?? 'dashboard';
  @endphp

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside 
      x-show="sidebarOpen"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="-translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="-translate-x-full"
      class="fixed inset-y-0 left-0 z-30 w-3/4 md:w-64 bg-white shadow-md transform md:relative"
   
      @click.away="if(window.innerWidth < 768) sidebarOpen = false"
      x-cloak
 >
      <div class="p-6">
        <h1 class="text-2xl font-bold text-blue-600">Warungku</h1>
      </div>
      <nav class="mt-8">
        <!-- Menu Items -->
        <a href="{{ route('dashboard') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'dashboard' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Dashboard
        </a>
        <a href="{{ url('/transaksi') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Transaksi
        </a>
        <a href="{{ url('/product') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Produk
        </a>
        <a href="{{ url('/laporan') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Laporan
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
      
      <!-- Tombol Close (Mobile Only) -->
      <button 
        @click="sidebarOpen = false" 
        class="absolute top-4 right-4 md:hidden"
      >
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </aside>

    <!-- Overlay untuk mobile (hanya tampil di mobile) -->
    <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-black opacity-50 z-20 md:hidden" @click="sidebarOpen = false"></div>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center">
          <!-- Tombol Hamburger untuk Mobile (di dalam header) -->
          <button @click="sidebarOpen = true" class="md:hidden mr-4 p-2 bg-white rounded shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
          <h2 class="text-lg md:text-xl font-semibold">Dashboard</h2>
        </div>
        <div class="flex items-center">
          <span class="mr-4 text-sm md:text-base">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
      </header>

      <!-- Konten -->
      <main class="p-2 md:p-4 flex-1 overflow-auto">
        <!-- Kartu Informasi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
          <!-- Card 1: Total Penjualan -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-blue-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 7H7v6h6V7z"/>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600 text-sm md:text-base">Total Penjualan</p>
                <p class="font-bold text-lg md:text-2xl">Rp 1.200.000</p>
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
                <p class="text-gray-600 text-sm md:text-base">Transaksi Hari Ini</p>
                <p class="font-bold text-lg md:text-2xl">15</p>
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
                <p class="text-gray-600 text-sm md:text-base">Produk Tersedia</p>
                <p class="font-bold text-lg md:text-2xl">200</p>
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
                <p class="text-gray-600 text-sm md:text-base">Stok Menipis</p>
                <p class="font-bold text-lg md:text-2xl">5</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabel Data Penjualan -->
        <div class="bg-white shadow rounded-lg p-4 md:p-6">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-base md:text-lg font-semibold">Data Penjualan Terbaru</h3>
            <!-- Input kalender untuk memilih tanggal penjualan -->
            <input type="date" class="border rounded-md px-2 py-1 md:px-3 md:py-2 focus:outline-none focus:ring focus:border-blue-300 text-xs md:text-sm" />
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
              <thead>
                <tr>
                  <th class="px-3 py-2 border-b text-left text-xs md:text-sm">ID</th>
                  <th class="px-3 py-2 border-b text-left text-xs md:text-sm">Nama Produk</th>
                  <th class="px-3 py-2 border-b text-left text-xs md:text-sm">Jumlah</th>
                  <th class="px-3 py-2 border-b text-left text-xs md:text-sm">Total</th>
                  <th class="px-3 py-2 border-b text-left text-xs md:text-sm">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-gray-50">
                  <td class="px-3 py-2 border-b text-xs md:text-sm">1</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">Produk A</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">3</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">Rp 300.000</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">2025-01-01</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-3 py-2 border-b text-xs md:text-sm">2</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">Produk B</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">2</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">Rp 200.000</td>
                  <td class="px-3 py-2 border-b text-xs md:text-sm">2025-01-02</td>
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
