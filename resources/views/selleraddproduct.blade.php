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
                class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Seller Dashboard</a>
        </div>
    </div>
</nav>
<div class="max-w-xl mx-auto mt-24 p-6 bg-white rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-4 text-[#123f11]">Add Product</h2>
    <form action="{{ route('seller.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-semibold">Product Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-semibold">Description</label>
            <textarea id="description" name="description" class="w-full border rounded p-2" rows="3" required></textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-semibold">Price</label>
            <input type="number" id="price" name="price" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="discount" class="block font-semibold">Discount (%)</label>
            <input type="number" id="discount" name="discount" class="w-full border rounded p-2" min="0" max="100" value="0" required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-semibold">Stock</label>
            <input type="number" id="stock" name="stock" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="photo" class="block font-semibold">Product Photo</label>
            <input type="file" id="photo" name="photo" accept="image/*" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="bg-[#fc8a06] hover:bg-[#e17704] text-white px-4 py-2 rounded shadow">Submit</button>
    </form>
</div>
<!-- Footer -->
<footer class="bg-orange-500 shadow-inner mt-10">
    <div class="max-w-7xl mx-auto py-4 px-4 text-center text-gray-500 text-xs select-none">
        &copy; ResqBites 2025, All Rights Reserved.
    </div>
</footer>
</body>
</html>