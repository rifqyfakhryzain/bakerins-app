@extends('layouts.app')

@section('content')

<!-- ✅ HERO SECTION -->
<section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">

    <!-- TEXT -->
    <div>
        <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
            Roti Fresh Setiap Hari  
            <span class="text-orange-600">Langsung ke Rumahmu</span>
        </h2>
        <p class="text-gray-600 mb-8 text-lg">
            Bakerins menghadirkan roti berkualitas tinggi, fresh from oven,
            untuk menemani harimu dengan rasa terbaik.
        </p>

        <div class="flex gap-4">
            <a href="/products"
                class="bg-orange-500 text-white px-8 py-4 rounded-lg shadow hover:bg-orange-600 transition">
                Lihat Produk
            </a>
            <a href="#features"
                class="border border-orange-500 text-orange-600 px-8 py-4 rounded-lg hover:bg-orange-50 transition">
                Kenapa Bakerins?
            </a>
        </div>
    </div>

    <!-- IMAGE -->
    <div class="relative">
        <img src="https://source.unsplash.com/700x500/?bakery,bread"
            class="rounded-2xl shadow-lg w-full">
    </div>
</section>

<!-- ✅ FEATURES -->
<section id="features" class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <h3 class="text-3xl md:text-4xl font-bold text-center mb-12">
            Kenapa Pilih Bakerins?
        </h3>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-3">🍞 Fresh Every Day</h4>
                <p class="text-gray-600">
                    Diproduksi setiap pagi supaya kamu selalu dapat roti terbaik.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-3">⚡ Fast Delivery</h4>
                <p class="text-gray-600">
                    Pengiriman cepat langsung ke rumahmu.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-3">✅ Tanpa Pengawet</h4>
                <p class="text-gray-600">
                    Aman dikonsumsi untuk keluarga setiap hari.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ✅ CTA -->
<section class="bg-orange-500 text-white py-20 text-center px-6">
    <h3 class="text-3xl md:text-4xl font-bold mb-6">
        Siap Menikmati Roti Terbaik Hari Ini?
    </h3>
    <p class="mb-8 text-lg opacity-90">
        Pesan sekarang dan rasakan pengalaman belanja roti online terbaik.
    </p>

    <a href="/products"
       class="bg-white text-orange-600 px-10 py-4 rounded-lg font-bold hover:bg-gray-100 transition">
        Mulai Belanja
    </a>
</section>

<!-- ✅ FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div>
            <h4 class="text-xl font-bold text-white mb-3">Bakerins</h4>
            <p class="text-sm">
                Toko roti online modern dengan kualitas terbaik untuk semua.
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

    <p class="text-center text-xs mt-10 opacity-50">
        © 2025 Bakerins. All rights reserved.
    </p>
</footer>

@endsection
