<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bakerins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preload" as="image" href="/images/bakerins.webp">

    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<!-- Navbar -->
<nav class="fixed top-0 w-full bg-white shadow z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    
    <!-- Logo -->
    <div class="flex items-center gap-2">
      <span class="text-2xl font-extrabold text-orange-600">Bakerins</span>
    </div>

    <!-- Menu Desktop -->
<div class="hidden md:flex items-center gap-8 font-medium">
  
  <a href="/"
     class="{{ request()->is('/') ? 'text-orange-600 font-bold' : 'hover:text-orange-600' }}">
     Home
  </a>

  <a href="/products"
     class="{{ request()->is('products') ? 'text-orange-600 font-bold' : 'hover:text-orange-600' }}">
     Produk
  </a>

  <a href="/login"
     class="{{ request()->is('login') ? 'text-orange-600 font-bold' : 'hover:text-orange-600' }}">
     Login
  </a>

  <a href="/products" 
     class="bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-600 transition">
     Belanja
  </a>
</div>


    <!-- Mobile Button -->
    <button id="menuBtn" class="md:hidden text-2xl">☰</button>
  </div>

  <!-- Mobile Menu -->
<div id="mobileMenu" class="hidden md:hidden bg-white border-t">

  <a href="/" 
     class="block px-6 py-4 {{ request()->is('/') ? 'bg-orange-50 text-orange-600 font-bold' : '' }}">
     Home
  </a>

  <a href="/products" 
     class="block px-6 py-4 {{ request()->is('products') ? 'bg-orange-50 text-orange-600 font-bold' : '' }}">
     Produk
  </a>

  <a href="/login" 
     class="block px-6 py-4 {{ request()->is('login') ? 'bg-orange-50 text-orange-600 font-bold' : '' }}">
     Login
  </a>

</div>
</nav>

<!-- Isi Halaman -->
<div class="pt-[88px]">
    @yield('content')
</div>

<script>
document.getElementById('menuBtn')?.addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.toggle('hidden')
})
</script>

</body>
</html>
