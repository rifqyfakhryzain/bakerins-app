@extends('layouts.app')

@section('content')

<!-- ✅ HEADER PRODUK -->
<section class="bg-gradient-to-br from-orange-50 to-white py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-3xl md:text-4xl font-extrabold mb-4">
      Produk Bakerins 🍞
    </h1>
    <p class="text-gray-600">
      Pilihan roti fresh terbaik untuk menemani harimu.
    </p>
  </div>
</section>

<!-- ✅ LIST PRODUK -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Grid Produk -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      @for ($i = 1; $i <= 8; $i++)
      <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

        <!-- ✅ IMAGE -->
        <img 
          src="/images/bakerins.webp" 
          class="w-full h-40 object-cover"
          loading="lazy"
          alt="Produk Bakerins"
        >

        <!-- ✅ BODY -->
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">Roti Manis</h3>
          <p class="text-sm text-gray-500 mb-3">Fresh Bakery</p>

          <div class="flex items-center justify-between">
            <span class="text-orange-600 font-bold">
              Rp 8.000
            </span>

            <button 
              class="bg-orange-500 text-white text-sm px-4 py-2 rounded-full hover:bg-orange-600 transition">
              Beli
            </button>
          </div>
        </div>
      </div>
      @endfor

    </div>
  </div>
</section>

@endsection
