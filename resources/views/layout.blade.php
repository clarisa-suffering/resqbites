<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>ResQbite</title>
    <link rel="icon" href="/Logo_Resqbite.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-orange-500 fixed top-0 w-full z-50">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('userHome') }}">
                        <img class="h-20 w-auto cursor-pointer" src="/Logo_Resqbite.png" alt="ResQBite">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-4">
                    <a href="{{ route('userHome') }}"
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

                    <!-- Login button styled as a rounded button with background -->
                    <a href="{{ route('home') }}"
                        class="ml-4 inline-block rounded-full bg-white text-orange-500 font-semibold px-5 py-2
        hover:bg-amber-500 hover:text-white transition-colors duration-300">
                        Logout
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");
            const menuIconPath = document.getElementById("menu-path");

            menuButton.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");

                // Toggle icon between menu and close
                if (mobileMenu.classList.contains("hidden")) {
                    menuIconPath.setAttribute("d", "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5");
                } else {
                    menuIconPath.setAttribute("d", "M6 18L18 6M6 6l12 12");
                }
            });
        });
    </script>

    {{-- Main content --}}
    <div class="pt-16">
        <main>
            @yield('content')
        </main>

        <!-- Partner Invitation Section -->
        <section class="p-6 mb-2">
            <div class="text-center mt-10 bg-white py-8 rounded-2xl shadow-md max-w-5xl mx-auto">
                <div class="flex flex-col items-center">
                    <img class="h-28 w-auto" src="/Logo_Resqbite.png" alt="ResQBite">
                    <div class="text-lg font-semibold mb-3">Ingin menggabungkan usaha Anda di platform kami?</div>
                    <a href="{{ route('formRegisterUMKM') }}"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-bold">KLIK
                        DISINI!</a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-xs text-gray-500 mt-6">
                ResqBites Copyright 2025, All Rights Reserved.<br>
            </div>
        </section>
    </div>

</body>

</html>