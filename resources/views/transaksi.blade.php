<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transaksi - Warungku</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
  @php
    // Set menu aktif menjadi 'transaksi'
    $activeMenu = $activeMenu ?? 'transaksi';
  @endphp

  <!-- Mobile Menu dengan Animasi -->
  <!-- Container disembunyikan secara default dengan kelas "hidden" -->
  <div id="mobile-menu" class="fixed inset-0 z-50 md:hidden hidden">
    <!-- Overlay (klik untuk menutup sidebar) -->
    <div id="mobile-overlay" class="absolute inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-300" onclick="toggleMobileMenu()"></div>
    <!-- Sidebar Mobile -->
    <aside id="mobile-sidebar" class="absolute inset-y-0 left-0 w-64 bg-white shadow-md transform -translate-x-full transition-transform duration-300 ease-out">
      <div class="flex justify-between items-center p-6 border-b">
        <h1 class="text-2xl font-bold text-blue-600">Warungku</h1>
        <!-- Tombol X untuk menutup sidebar -->
        <button onclick="toggleMobileMenu()">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <nav class="mt-8">
        <!-- Menu Items -->
        <a href="{{ route('dashboard') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'dashboard' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Dashboard
        </a>
        <a href="{{ url('/transaksi') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'transaksi' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Transaksi
        </a>
        <a href="{{ route('product') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'product' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Product
        </a>
        <a href="#"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          laporan
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
  </div>

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
        <a href="{{ url('/product') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'product' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          product
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
          <!-- Tombol Hamburger untuk Mobile -->
          <button class="md:hidden mr-4" onclick="toggleMobileMenu()">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <h2 class="text-xl font-semibold">Transaksi</h2>
        </div>
        <div class="flex items-center">
          <span class="mr-4">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture" />
        </div>
      </header>
      <!-- Konten -->
      <main class="p-6 overflow-auto">
        <!-- Tambahan Kartu Informasi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
          <!-- Card Total Penjualan -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-blue-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 7H7v6h6V7z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Total Penjualan</p>
                <p class="text-2xl font-bold">Rp 1.200.000</p>
              </div>
            </div>
          </div>
          <!-- Card Transaksi Hari Ini -->
          <div class="bg-white shadow rounded-lg p-4">
            <div class="flex items-center">
              <div class="bg-green-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M3 3h14v2H3V3zm0 4h14v2H3V7zm0 4h14v2H3v-2zm0 4h14v2H3v-2z" />
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-gray-600">Transaksi Hari Ini</p>
                <p class="text-2xl font-bold">15</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Judul Halaman -->
        <h1 class="text-3xl font-bold mb-4">Halaman Transaksi</h1>
        <!-- Tombol Pemasukan & Pengeluaran -->
        <div class="mb-6">
          <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mr-2">
            Pemasukan
          </button>
          <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
            Pengeluaran
          </button>
        </div>
        <!-- Tabel Transaksi -->
        <div class="bg-white shadow rounded-lg p-6">
          <div class="flex items-center justify-between mb-4 flex-wrap">
            <h3 class="text-lg font-semibold">Daftar Transaksi</h3>
            <!-- Input tanggal -->
            <input type="date" class="border rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-300 mt-2 md:mt-0" />
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b text-left">ID</th>
                  <th class="px-4 py-2 border-b text-left">Tanggal</th>
                  <th class="px-4 py-2 border-b text-left">Deskripsi</th>
                  <th class="px-4 py-2 border-b text-left">Jumlah</th>
                  <th class="px-4 py-2 border-b text-left">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">1</td>
                  <td class="px-4 py-2 border-b">2025-01-01</td>
                  <td class="px-4 py-2 border-b">Penjualan Produk A</td>
                  <td class="px-4 py-2 border-b">Rp 100.000</td>
                  <td class="px-4 py-2 border-b">
                    <span class="text-gray-500">-</span>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">2</td>
                  <td class="px-4 py-2 border-b">2025-01-02</td>
                  <td class="px-4 py-2 border-b">Pembelian Barang</td>
                  <td class="px-4 py-2 border-b">Rp 50.000</td>
                  <td class="px-4 py-2 border-b">
                    <span class="text-gray-500">-</span>
                  </td>
                </tr>
                <!-- Tambahkan baris transaksi lainnya sesuai kebutuhan -->
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Script untuk Toggle Mobile Menu dengan Animasi -->
  <script>
    function toggleMobileMenu() {
      var mobileMenu    = document.getElementById('mobile-menu');
      var mobileOverlay = document.getElementById('mobile-overlay');
      var mobileSidebar = document.getElementById('mobile-sidebar');

      if (mobileSidebar.classList.contains('-translate-x-full')) {
        mobileMenu.classList.remove('hidden');
        requestAnimationFrame(function() {
          requestAnimationFrame(function() {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebar.classList.add('translate-x-0');
            mobileOverlay.classList.remove('opacity-0', 'pointer-events-none');
            mobileOverlay.classList.add('opacity-50');
          });
        });
      } else {
        mobileSidebar.classList.remove('translate-x-0');
        mobileSidebar.classList.add('-translate-x-full');
        mobileOverlay.classList.remove('opacity-50');
        mobileOverlay.classList.add('opacity-0', 'pointer-events-none');
        setTimeout(function() {
          mobileMenu.classList.add('hidden');
        }, 300);
      }
    }
  </script>
</body>
</html>
