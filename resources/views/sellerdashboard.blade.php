<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ResQbite</title>
    <link rel="icon" href="/Logo_Resqbite.png" />
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
                    <a href="{{ route('sellerdashboard') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
        {{ Route::currentRouteName() == 'sellerdashboard' ? 'bg-amber-500 text-white' : 'text-gray-100 hover:bg-amber-500 hover:text-white' }}">
                        Seller Dashboard
                    </a>
                    <!-- Tombol Logout -->
                    <form action="{{ route('home') }}" method="GET">
                        <button
                            class="ml-4 inline-block rounded-full bg-white text-orange-500 font-semibold px-5 py-2
        hover:bg-amber-500 hover:text-white transition-colors duration-300">
                            Logout
                        </button>
                    </form>

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
    <div class="pt-27 max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Dashboard Seller</h1>

        {{-- Contoh data, statistik, dsb --}}
        <div class="py-10 px-6 max-w-7xl mx-auto">

            {{-- Header dan Logo Izuka --}}
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <div class="flex items-center gap-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s"
                        class="w-16 h-16 object-cover rounded-full shadow" />
                    <div>
                        <h1 class="text-2xl font-bold text-[#123f11]">Izuka Kitchen Dashboard</h1>
                        <p class="text-sm text-gray-500">Makanan rumahan lezat dan bergizi</p>
                    </div>
                </div>
                <a href="{{ route('addproduct') }}"
                    class="bg-[#fc8a06] hover:bg-[#e17704] text-white font-semibold py-2 px-5 rounded-xl shadow-md transition">
                    + Add Product
                </a>
            </div>

            {{-- Produk dari Izuka --}}
            @php
            $menus = [
            [
            'name' => 'Ayam Goreng Mentega',
            'desc' => 'Nasi dengan ayam goreng saus mentega.',
            'price' => 'Rp 20.000',
            'original' => 'Rp 25.000',
            'img' => 'https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg'
            ],
            [
            'name' => 'Mie Ayam Bakso',
            'desc' => 'Mie ayam lengkap dengan bakso kenyal dan sayuran.',
            'price' => 'Rp 16.000',
            'original' => 'Rp 20.000',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeO8HCOrfPiFV7JaDhcCvolvrvone7yzz1jg&s'
            ],
            [
            'name' => 'Sate Ayam Bumbu Kacang',
            'desc' => 'Sate ayam empuk dengan bumbu kacang khas Jawa.',
            'price' => 'Rp 20.000',
            'original' => 'Rp 25.000',
            'img' => 'https://i.ytimg.com/vi/R0mDzP0A_DQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCKevZCAetrLVnQIhN9FBW8vvPfcg'
            ]
            ];
            @endphp

            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($menus as $menu)
                <div class="bg-white rounded-xl shadow p-4 flex flex-col hover:shadow-lg transition-shadow duration-300">
                    <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-3">
                        <img src="{{ $menu['img'] }}" alt="{{ $menu['name'] }}" class="object-cover w-full h-full" loading="lazy">
                    </div>
                    <h2 class="text-lg font-semibold text-[#123f11] mb-1">{{ $menu['name'] }}</h2>
                    <p class="text-gray-700 flex-grow mb-2">{{ $menu['desc'] }}</p>
                    <div class="flex justify-between items-center mb-2 text-sm text-gray-500">
                        <span class="line-through">{{ $menu['original'] }}</span>
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">-20%</span>
                    </div>
                    <p class="text-[#fc8a06] font-bold text-lg mb-3">{{ $menu['price'] }}</p>

                    <!-- Tombol Edit dan Delete -->
                    <div class="flex justify-between items-center mt-auto">
                        <div class="flex space-x-2">
                            <a href="#" class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-lg text-xs shadow">
                                Edit
                            </a>
                            <form method="POST" action="#" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-lg text-xs shadow">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Sisa Stok -->
                    <p class="text-sm text-gray-500 mt-2">Sisa Stok: <span class="font-semibold text-gray-700">3</span></p>

                </div>

                @endforeach
            </section>

        </div>
    </div>

    <!-- Footer -->
    <footer class="shadow-inner mt-10 bg-orange-500">
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