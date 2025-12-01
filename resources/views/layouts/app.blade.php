<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bakerins</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- ✅ NAVBAR RESPONSIVE -->
<nav class="bg-white shadow px-4 md:px-10 py-4 flex items-center justify-between">
    <h1 class="text-xl md:text-2xl font-bold text-orange-600">Bakerins</h1>

    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-6">
        <a href="/" class="hover:text-orange-500">Home</a>
        <a href="/products" class="hover:text-orange-500">Produk</a>
        <a href="/login" class="hover:text-orange-500">Login</a>
    </div>

    <!-- Mobile Button -->
    <button id="menuBtn" class="md:hidden text-2xl">☰</button>
</nav>

<!-- ✅ MOBILE MENU -->
<div id="mobileMenu" class="hidden bg-white shadow md:hidden">
    <a href="/" class="block px-6 py-3 border-b">Home</a>
    <a href="/products" class="block px-6 py-3 border-b">Produk</a>
    <a href="/login" class="block px-6 py-3">Login</a>
</div>

<!-- ✅ KONTEN -->
<div class="p-4 md:p-10">
    @yield('content')
</div>

<script>
document.getElementById('menuBtn')?.addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.toggle('hidden')
})
</script>

</body>
</html>
