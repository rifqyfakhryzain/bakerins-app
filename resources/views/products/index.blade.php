@extends('layouts.app')

@section('content')

<!-- ✅ HEADER PRODUK --> <section class="bg-gradient-to-br from-orange-50 to-white py-16"> <div class="max-w-7xl mx-auto px-6 text-center"> <h1 class="text-3xl md:text-4xl font-extrabold mb-4"> Produk Bakerins 🍞 </h1> <p class="text-gray-600"> Pilihan roti fresh terbaik untuk menemani harimu. </p> </div> </section>

<!-- ✅ LIST PRODUK -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Grid Produk -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      @foreach ($products as $product)
      <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

        <!-- ✅ IMAGE -->
        <img 
          src="{{ $product->image ?? '/images/bakerins.webp' }}" 
          class="w-full h-40 object-cover"
          loading="lazy"
          alt="{{ $product->name }}"
        >

        <!-- ✅ BODY -->
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">
            {{ $product->name }}
          </h3>

          <p class="text-sm text-gray-500 mb-3">
            {{ $product->category->name ?? 'UMKM Bakerins' }}
          </p>

          <div class="flex items-center justify-between">
            <span class="text-orange-600 font-bold">
              Rp {{ number_format($product->price, 0, ',', '.') }}
            </span>

            <button 
              class="bg-orange-500 text-white text-sm px-4 py-2 rounded-full hover:bg-orange-600 transition">
              Beli
            </button>
          </div>
        </div>

      </div>
      @endforeach

    </div>
  </div>
</section>


@endsection
