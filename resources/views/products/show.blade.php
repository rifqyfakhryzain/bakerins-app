@extends('layouts.app')

@section('content')
    <!-- HERO DETAIL -->
    <section class="bg-gradient-to-br from-orange-50 to-white py-20">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

<div class="relative w-full max-w-[320px] mx-auto rounded-xl overflow-hidden bg-white shadow"
     style="aspect-ratio: 4 / 3;">
    
    <img
        src="{{ asset('storage/' . $product->image) }}"
        alt="{{ $product->name }}"
        class="absolute inset-0 w-full h-full object-contain"
    >

</div>





            <!-- INFO -->
            <div>
                <span class="bg-orange-500 text-white text-xs font-semibold px-4 py-1 rounded-full shadow">
                    {{ $product->category->name ?? 'UMKM Bakerins' }}
                </span>
                <h1 class="text-4xl font-extrabold mb-4 leading-tight">
                    {{ $product->name }}
                </h1>


                <p class="text-gray-600 text-lg mb-6">
                    {{ $product->description ?? 'Produk Bakerins dibuat dari bahan pilihan, fresh setiap hari, dan higienis.' }}
                </p>

                <div class="flex items-center gap-3 mb-6">


                    <span class="text-3xl font-bold text-orange-600">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>

                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">
                        ✔ Ready Stock
                    </span>
                </div>



                <!-- ACTION -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-orange-500 text-white px-8 py-4 rounded-full font-semibold
                           hover:bg-orange-600 transition active:scale-95">
                        🛒 Beli Sekarang
                    </button>

                    <a href="{{ url('/products') }}"
                        class="px-8 py-4 rounded-full border text-center hover:bg-gray-100 transition">
                        ⬅ Kembali ke Produk
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- INFO TAMBAHAN -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">

            <div class="bg-gray-50 p-8 rounded-3xl hover:shadow-xl transition">
                <div class="text-4xl mb-4">🍞</div>
                <h3 class="font-bold text-lg mb-2">Fresh Setiap Hari</h3>
                <p class="text-gray-600 text-sm">
                    Diproduksi setiap pagi agar kualitas dan rasa tetap terjaga.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-3xl hover:shadow-xl transition">
                <div class="text-4xl mb-4">🏠</div>
                <h3 class="font-bold text-lg mb-2">Produksi Rumahan</h3>
                <p class="text-gray-600 text-sm">
                    Dibuat langsung dari dapur rumahan Bakerins.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-3xl hover:shadow-xl transition">
                <div class="text-4xl mb-4">✅</div>
                <h3 class="font-bold text-lg mb-2">Tanpa Pengawet</h3>
                <p class="text-gray-600 text-sm">
                    Aman dikonsumsi oleh seluruh keluarga.
                </p>
            </div>

        </div>
    </section>

    <!-- CTA BAWAH -->
    <section class="py-20 bg-orange-500 text-white text-center px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Siap Menikmati Produk Bakerins?
        </h2>

        <p class="mb-10 text-lg opacity-90">
            Pesan sekarang dan rasakan es dan bolu terbaik dari UMKM lokal.
        </p>

        <a href="/products"
            class="bg-white text-orange-600 px-10 py-4 rounded-full font-semibold hover:bg-gray-100 transition">
            Lihat Produk Lainnya
        </a>
    </section>
@endsection
