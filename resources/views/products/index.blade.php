@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">Daftar Produk</h2>

<!-- ✅ RESPONSIVE GRID -->
<div id="product-list" 
     class="grid grid-cols-2 md:grid-cols-4 gap-4">
</div>

<script>
fetch('http://127.0.0.1:8000/api/products') // GANTI SESUAI API KAMU
.then(res => res.json())
.then(data => {
    let html = '';
    data.data.forEach(item => {
        html += `
            <div class="bg-white p-3 md:p-4 rounded shadow hover:shadow-lg transition">
                <img src="${item.gambar}" class="h-36 w-full object-cover rounded mb-2">
                <h3 class="font-bold text-sm md:text-base">${item.nama}</h3>
                <p class="text-orange-600 font-bold text-sm mt-1">Rp ${item.harga}</p>
            </div>
        `;
    });
    document.getElementById('product-list').innerHTML = html;
});
</script>

@endsection
