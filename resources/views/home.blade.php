@extends('layouts.app')

@section('content')

<!-- ✅ HERO MODERN -->
<section class="bg-gradient-to-br from-orange-50 to-white">
  <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-14 items-center">

    <!-- Text -->
    <div>
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
        Roti Fresh Setiap Hari  
        <span class="text-orange-600 block">Langsung ke Rumahmu</span>
      </h1>

      <p class="text-gray-600 text-lg mb-8">
        Bakerins menghadirkan roti fresh dari oven setiap hari, 
        dibuat tanpa pengawet, dan langsung dikirim ke rumahmu.
      </p>

      <div class="flex gap-4">
        <a href="/products"
           class="bg-orange-500 text-white px-8 py-4 rounded-full shadow hover:bg-orange-600 transition">
           Belanja Sekarang
        </a>

        <a href="#unggulan"
           class="border border-orange-500 text-orange-600 px-8 py-4 rounded-full hover:bg-orange-50 transition">
           Lihat Keunggulan
        </a>
      </div>

      <div class="flex gap-6 mt-10 text-sm text-gray-500">
        <span>✅ Fresh Harian</span>
        <span>✅ Tanpa Pengawet</span>
        <span>✅ Pengiriman Cepat</span>
      </div>
    </div>

    <!-- Image -->
    <div class="relative">
      <img 
        src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec" 
        class="rounded-3xl shadow-2xl w-full"
      >
    </div>

  </div>
</section>

<!-- ✅ KEUNGGULAN -->
<section id="unggulan" class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">
      Kenapa Pilih Bakerins?
    </h2>

    <div class="grid md:grid-cols-3 gap-10">

      <div class="bg-gray-50 p-10 rounded-3xl text-center hover:shadow-xl transition">
        <div class="text-4xl mb-4">🍞</div>
        <h3 class="text-xl font-bold mb-2">Fresh Setiap Hari</h3>
        <p class="text-gray-600 text-sm">
          Diproduksi setiap pagi dari bahan pilihan.
        </p>
      </div>

      <div class="bg-gray-50 p-10 rounded-3xl text-center hover:shadow-xl transition">
        <div class="text-4xl mb-4">⚡</div>
        <h3 class="text-xl font-bold mb-2">Pengiriman Cepat</h3>
        <p class="text-gray-600 text-sm">
          Langsung dikirim setelah roti matang.
        </p>
      </div>

      <div class="bg-gray-50 p-10 rounded-3xl text-center hover:shadow-xl transition">
        <div class="text-4xl mb-4">✅</div>
        <h3 class="text-xl font-bold mb-2">Tanpa Pengawet</h3>
        <p class="text-gray-600 text-sm">
          Aman untuk keluarga setiap hari.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ✅ PRODUK UNGGULAN (SIAP API NANTI) -->
<section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex justify-between items-center mb-10">
      <h2 class="text-3xl font-bold">Produk Unggulan</h2>
      <a href="/products" class="text-orange-600 hover:underline">
        Lihat Semua →
      </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

      @for ($i = 0; $i < 4; $i++)
      <div class="bg-white p-4 rounded-2xl shadow hover:shadow-xl transition">
        <img 
          src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec" 
          class="h-40 w-full object-cover rounded-xl mb-3"
        >

        <h3 class="font-bold text-lg">Roti Manis</h3>
        <p class="text-sm text-gray-500">Fresh Bakery</p>

        <div class="flex justify-between items-center mt-3">
          <span class="text-orange-600 font-bold">Rp 8.000</span>
          <button class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm">
            Beli
          </button>
        </div>
      </div>
      @endfor

    </div>
  </div>
</section>

<!-- ✅ CTA MODERN -->
<section class="py-24 bg-orange-500 text-white text-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-6">
    Siap Nikmati Roti Terbaik Hari Ini?
  </h2>

  <p class="mb-10 text-lg opacity-90">
    Pesan sekarang dan rasakan pengalaman belanja roti online terbaik.
  </p>

  <a href="/products"
     class="bg-white text-orange-600 px-10 py-4 rounded-full font-semibold hover:bg-gray-100 transition">
     Mulai Belanja
  </a>
</section>

<!-- ✅ FOOTER PREMIUM -->
<footer class="bg-gray-900 text-gray-400 py-16">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12">

    <div>
      <h3 class="text-2xl font-bold text-white mb-4">Bakerins</h3>
      <p class="text-sm">
        Toko roti online modern dengan kualitas terbaik.
      </p>
    </div>

    <div>
      <h4 class="font-bold text-white mb-3">Menu</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="/" class="hover:text-white">Home</a></li>
        <li><a href="/products" class="hover:text-white">Produk</a></li>
        <li><a href="/login" class="hover:text-white">Login</a></li>
      </ul>
    </div>

    <div>
      <h4 class="font-bold text-white mb-3">Kontak</h4>
      <p class="text-sm">support@bakerins.com</p>
      <p class="text-sm">+62 812-xxxx-xxxx</p>
    </div>

  </div>

  <p class="text-center text-xs mt-12 opacity-50">
    © 2025 Bakerins. All rights reserved.
  </p>
</footer>

@endsection
