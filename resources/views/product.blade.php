<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk - Warungku</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Muat AlpineJS -->
  <script src="//unpkg.com/alpinejs" defer></script>
  <style>
    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="bg-gray-100 min-h-screen" x-data="{ mobileMenu: false }">
  @php
    // Set menu aktif menjadi 'produk'
    $activeMenu = $activeMenu ?? 'produk';
  @endphp

  <!-- Mobile Sidebar -->
  <div x-show="mobileMenu" 
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 transform -translate-x-full"
       x-transition:enter-end="opacity-100 transform translate-x-0"
       x-transition:leave="transition ease-in duration-200"
       x-transition:leave-start="opacity-100 transform translate-x-0"
       x-transition:leave-end="opacity-0 transform -translate-x-full"
       class="fixed inset-0 z-50 flex md:hidden" x-cloak>
    <!-- Latar belakang gelap untuk menutup sidebar saat diklik -->
    <div class="fixed inset-0 bg-black opacity-50" @click="mobileMenu = false"></div>
    <!-- Konten Sidebar Mobile -->
    <aside class="relative flex-1 flex flex-col max-w-xs w-full bg-white shadow-md">
      <!-- Tombol Close (ikon "X") -->
      <button @click="mobileMenu = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-900">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
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
        <a href="#" 
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
    </aside>
    <!-- Ruang tambahan untuk sidebar mobile -->
    <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
  </div>

  <!-- Container Utama -->
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar Desktop (statis) -->
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
        <a href="#" 
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
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center">
          <!-- Tombol untuk membuka mobile sidebar -->
          <button @click="mobileMenu = true" class="md:hidden mr-4 focus:outline-none">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <h2 class="text-xl font-semibold">Produk</h2>
        </div>
        <div class="flex items-center">
          <span class="mr-4">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture" />
        </div>
      </header>

      <!-- Area Konten Utama -->
      <main class="p-6 overflow-auto" x-data="{ activeTable: 'masuk' }">
        <h1 class="text-3xl font-bold mb-4">Halaman Produk</h1>
        <p class="text-gray-700 mb-6">
          Lihat data produk masuk dan produk keluar hari ini.
        </p>

        <!-- Card Ringkasan Barang Masuk dan Barang Keluar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
          <!-- Card Barang Masuk -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-green-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600 text-sm">Barang Masuk Hari Ini</p>
                <p class="text-2xl font-bold">10</p>
              </div>
            </div>
          </div>
          <!-- Card Barang Keluar -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-red-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600 text-sm">Barang Keluar Hari Ini</p>
                <p class="text-2xl font-bold">5</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tombol Toggle untuk Tabel -->
        <div class="mb-6">
          <button @click="activeTable = 'masuk'" 
                  :class="activeTable === 'masuk' ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-700'" 
                  class="px-4 py-2 rounded mr-2">
            Barang Masuk
          </button>
          <button @click="activeTable = 'keluar'" 
                  :class="activeTable === 'keluar' ? 'bg-red-500 text-white' : 'bg-gray-200 text-gray-700'" 
                  class="px-4 py-2 rounded">
            Barang Keluar
          </button>
        </div>

        <!-- Area Tabel yang Berganti -->
        <div class="bg-white shadow rounded-lg p-6">
          <!-- Tabel Produk Masuk -->
          <div x-show="activeTable === 'masuk'" x-cloak>
            <div class="flex items-center justify-between mb-4 flex-wrap">
              <h3 class="text-lg font-semibold">Produk Masuk Hari Ini</h3>
              <input type="date" class="border rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-300 mt-2 md:mt-0" />
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full">
                <thead>
                  <tr>
                    <th class="px-4 py-2 border-b text-left">ID</th>
                    <th class="px-4 py-2 border-b text-left">Nama Produk</th>
                    <th class="px-4 py-2 border-b text-left">Jumlah Masuk</th>
                    <th class="px-4 py-2 border-b text-left">Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">1</td>
                    <td class="px-4 py-2 border-b">Produk A</td>
                    <td class="px-4 py-2 border-b">10</td>
                    <td class="px-4 py-2 border-b">08:00</td>
                  </tr>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">2</td>
                    <td class="px-4 py-2 border-b">Produk B</td>
                    <td class="px-4 py-2 border-b">5</td>
                    <td class="px-4 py-2 border-b">09:30</td>
                  </tr>
                  <!-- Tambahkan baris produk masuk tambahan sesuai kebutuhan -->
                </tbody>
              </table>
            </div>
          </div>
          <!-- Tabel Produk Keluar -->
          <div x-show="activeTable === 'keluar'" x-cloak>
            <div class="flex items-center justify-between mb-4 flex-wrap">
              <h3 class="text-lg font-semibold">Produk Keluar Hari Ini</h3>
              <input type="date" class="border rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-300 mt-2 md:mt-0" />
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full">
                <thead>
                  <tr>
                    <th class="px-4 py-2 border-b text-left">ID</th>
                    <th class="px-4 py-2 border-b text-left">Nama Produk</th>
                    <th class="px-4 py-2 border-b text-left">Jumlah Keluar</th>
                    <th class="px-4 py-2 border-b text-left">Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">1</td>
                    <td class="px-4 py-2 border-b">Produk A</td>
                    <td class="px-4 py-2 border-b">3</td>
                    <td class="px-4 py-2 border-b">10:00</td>
                  </tr>
                  <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">2</td>
                    <td class="px-4 py-2 border-b">Produk C</td>
                    <td class="px-4 py-2 border-b">7</td>
                    <td class="px-4 py-2 border-b">11:15</td>
                  </tr>
                  <!-- Tambahkan baris produk keluar tambahan sesuai kebutuhan -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
