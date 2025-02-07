<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false }" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaksi - Warungku</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- AlpineJS untuk interaktivitas -->
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 h-full">
  @php
    // Set menu aktif menjadi 'transaksi'
    $activeMenu = $activeMenu ?? 'transaksi';
  @endphp

  <!-- Overlay untuk menutup sidebar saat klik di luar (mobile) -->
  <div x-show="sidebarOpen" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" @click="sidebarOpen = false"></div>

  <!-- Header Mobile -->
  <header class="bg-white shadow-md p-4 md:hidden flex items-center justify-between">
    <div class="flex items-center">
      <!-- Tombol hamburger -->
      <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none focus:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <span class="ml-2 text-xl font-semibold">Transaksi</span>
    </div>
    <div class="flex items-center">
      <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
    </div>
  </header>

  <div class="flex h-full">
    <!-- Sidebar -->
    <aside :class="{'-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen}"
           class="fixed z-50 inset-y-0 left-0 w-64 bg-white shadow-md transform transition-transform duration-200 ease-in-out md:static md:translate-x-0">
      <div class="p-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">Warungku</h1>
        <!-- Tombol close sidebar (mobile) -->
        <button @click="sidebarOpen = false" class="md:hidden text-gray-500">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <nav class="mt-4">
        <a href="{{ route('dashboard') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'dashboard' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Dashboard
        </a>
        <a href="{{ route('transaksi') }}"
           class="block py-2.5 px-4 rounded transition duration-200 {{ $activeMenu == 'transaksi' ? 'bg-blue-500 text-white' : 'hover:bg-blue-100 hover:text-blue-600' }}">
          Transaksi
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Produk
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Laporan
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Pengaturan
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Utang & Piutang
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 hover:text-blue-600">
          Kalkulator Harga
        </a>
      </nav>
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64">
      <!-- Header Desktop -->
      <header class="bg-white shadow-md p-4 hidden md:flex justify-between items-center">
        <h2 class="text-xl font-semibold">Transaksi</h2>
        <div class="flex items-center">
          <span class="mr-4">Hai, Admin</span>
          <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
      </header>
      <main class="p-6 flex-1 overflow-auto">
        <h1 class="text-3xl font-bold mb-4">Halaman Transaksi</h1>
        <p class="text-gray-700 mb-6">
          Kelola transaksi pemasukan dan pengeluaran di sini.
        </p>
        <!-- Tabel Transaksi -->
        <div class="bg-white shadow rounded-lg p-6">
          <div class="mb-4 flex justify-between items-center">
            <h3 class="text-lg font-semibold">Daftar Transaksi</h3>
            <!-- Tempat filter atau pencarian jika diperlukan -->
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
                    <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                      Pemasukan
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded ml-2">
                      Pengeluaran
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-2 border-b">2</td>
                  <td class="px-4 py-2 border-b">2025-01-02</td>
                  <td class="px-4 py-2 border-b">Pembelian Barang</td>
                  <td class="px-4 py-2 border-b">Rp 50.000</td>
                  <td class="px-4 py-2 border-b">
                    <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                      Pemasukan
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded ml-2">
                      Pengeluaran
                    </button>
                  </td>
                </tr>
                <!-- Tambahkan data transaksi lainnya sesuai kebutuhan -->
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
