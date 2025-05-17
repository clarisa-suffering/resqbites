<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Seller Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-orange-500 fixed top-0 w-full z-50">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img class="h-20 w-auto" src="/Logo_Resqbite.png" alt="ResQBite">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-4">
                    <a href="{{ route('home') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Route::currentRouteName() == 'home' ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Home
                    </a>

                    <a href="{{ route('foods.display') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Route::currentRouteName() == 'foods.display' ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Browse Menu
                    </a>

                    <a href="{{url('restaurants')}}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Request::is('restaurants') ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Restaurants
                    </a>

                    <a href="{{ route('orderPage') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Route::currentRouteName() == 'orderPage' ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Keranjang
                    </a>

                    <a href="{{ route('sellerdashboard') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Route::currentRouteName() == 'sellerdashboard' ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Seller
                    </a>

                </div>


                <!-- Mobile Menu Button (Right aligned) -->
                <div class="sm:hidden">
                    <button id="mobile-menu-button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-100 hover:bg-amber-500 hover:text-white focus:ring-2 focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <svg id="menu-icon" class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path id="menu-path" stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href=""
                    class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Home</a>
                <a href=""
                    class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Browse
                    Menu</a>
                <a href=""
                    class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Restaurants</a>
                <a href=""
                    class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Track
                    Orders</a>
                <a href="{{ route('sellerdashboard') }}"
                    class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Seller</a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="pt-20 max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Dashboard Seller</h1>

        {{-- Tambahkan isi dashboard sellermu di sini --}}
        <p>Selamat datang di dashboard penjual kamu!</p>
        {{-- Contoh data, statistik, dsb --}}
        <div class="py-10 px-6 max-w-7xl mx-auto">

            {{-- Header dengan tombol Add Product --}}
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl md:text-3xl font-bold text-[#123f11]">My Products</h1>
                <a href="{{ route('addproduct') }}"
                    class="bg-[#fc8a06] hover:bg-[#e17704] text-white font-semibold py-2 px-5 rounded-xl shadow-md transition">
                    + Add Product
                </a>

            </div>

            {{-- Grid produk --}}
            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col hover:shadow-lg transition-shadow duration-300">
                    <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://via.placeholder.com/300x160/FC8A06/123F11?text=Product+{{$i}}"
                            alt="Product {{$i}}"
                            class="object-cover w-full h-full"
                            loading="lazy">
                    </div>
                    <h2 class="text-lg font-semibold text-[#123f11] mb-1">Product {{$i}}</h2>
                    <p class="text-gray-700 flex-grow mb-3">This is a short description for product {{$i}} that fits nicely here.</p>
                    <p class="text-[#fc8a06] font-bold text-lg">Rp {{ number_format(50000 * $i, 0, ',', '.') }}</p>
        </div>
        @endfor
        </section>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-10">
        <div class="max-w-7xl mx-auto py-4 px-4 text-center text-gray-500 text-xs select-none">
            &copy; ResqBites 2025, All Rights Reserved.
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");
            const menuIconPath = document.getElementById("menu-path");

            menuButton.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");

                if (mobileMenu.classList.contains("hidden")) {
                    menuIconPath.setAttribute("d", "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5");
                } else {
                    menuIconPath.setAttribute("d", "M6 18L18 6M6 6l12 12");
                }
            });
        });
    </script>
</body>

</html>