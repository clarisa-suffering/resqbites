<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.css" rel="stylesheet" />
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav class="bg-orange-500 fixed top-0 w-full z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <img class="h-8 w-auto" src="/logo.png" alt="ResQBite">
        </div>
  
        <!-- Desktop Menu -->
        <div class="hidden sm:flex sm:items-center sm:space-x-4">
          <a href="" class="rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Home</a>
          <a href="" class="rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Browse Menu</a>
          <a href="" class="rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Restaurants</a>
          <a href="" class="rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Track Orders</a>
        </div>
  
        <!-- Mobile Menu Button (Right aligned) -->
        <div class="sm:hidden">
          <button id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-100 hover:bg-amber-500 hover:text-white focus:ring-2 focus:ring-white">
            <span class="sr-only">Open main menu</span>
            <svg id="menu-icon" class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path id="menu-path" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile Menu -->
    <div class="hidden sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <a href="" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Home</a>
        <a href="" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Browse Menu</a>
        <a href="" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Restaurants</a>
        <a href="" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-100 hover:bg-amber-500 hover:text-white">Track Orders</a>
      </div>
    </div>
  </nav>
  
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");
      const menuIconPath = document.getElementById("menu-path");
  
      menuButton.addEventListener("click", function () {
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

<div class="pt-16">
{{-- carousel--}}
<div id="default-carousel" class="relative w-full aspect-[3/1]" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative w-full h-full overflow-hidden rounded-lg">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="https://helpcenter-cms-assets.grab.com/helpcenter/grab/merchant/id/id/4409826486681/4409826486681-Artikel.png" class="absolute inset-0 w-full h-full object-cover" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="https://i.pinimg.com/736x/cc/e1/31/cce131952f9fd2601714682790d5602d.jpg" class="absolute inset-0 w-full h-full object-cover" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="https://www.pixelldesign.com/wp-content/uploads/desain-banner-spanduk-iklan-makanan-rumah-makan-kedai.webp" class="absolute inset-0 w-full h-full object-cover" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3mdu1YzbHtEX8ZoayFwF6KpKOdWChvnc0Sw74jJNyQcvicOf7WUG-0s_6Zearlyq0tRk&usqp=CAU" class="absolute inset-0 w-full h-full object-cover" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/healthy-eating-discount-deal-facebook-image-design-template-17b4185744e7da51809d40e929c4c70f_screen.jpg?ts=1643913523" class="absolute inset-0 w-full h-full object-cover" alt="...">
      </div>
  
    <!-- Controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
        <svg class="w-4 h-4 text-white rtl:rotate-180" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
        <svg class="w-4 h-4 text-white rtl:rotate-180" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

    <!-- Terdekat Dengan Anda -->
    <section class="py-10 px-6">
        <h2 class="text-xl font-bold mb-6">Terdekat Dengan Anda</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white rounded-xl shadow p-4">
            <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
              <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg" class="object-cover w-full h-full">
              <!-- Small rectangle discount tag -->
              <div class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg" >
                -20%
              </div>
            </div>
            <p class="text-sm text-orange-600 mb-1">Izuka Kitchen</p>
            <h3 class="text-lg font-semibold">Ayam goreng mentega</h3>
          </div>
          <div class="bg-white rounded-xl shadow p-4">
            <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
              <img src="https://i.ytimg.com/vi/Q6nmR-jN0Jc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLB-2zVn8ll-7g0bwEB_uINPGk_c3Q" class="object-cover w-full h-full">
              <!-- Small rectangle discount tag -->
              <div class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg" >
                -20%
              </div>
            </div>
            <p class="text-sm text-orange-600 mb-1">Depot SGP</p>
            <h3 class="text-lg font-semibold">Ricebowl ayam teriyaki</h3>
          </div>
          <div class="bg-white rounded-xl shadow p-4">
            <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
              <img src="https://img-global.cpcdn.com/recipes/cfccce6fba971208/1200x630cq70/photo.jpg" class="object-cover w-full h-full">
              <!-- Small rectangle discount tag -->
              <div class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg" >
                -20%
              </div>
            </div>
            <p class="text-sm text-orange-600 mb-1">Dapoer Mama</p>
            <h3 class="text-lg font-semibold">Capcay seafood</h3>
          </div>
        </div>
    </section>

    <!-- Sedang Buka Sekarang -->
    <section class="py-10 px-6">
        <h2 class="text-xl font-bold mb-6">Sedang Buka Sekarang</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s" class="object-cover w-full h-full rounded-lg mx-auto mb-1"/>
              </div>
              <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img src="https://image.similarpng.com/file/similarpng/original-picture/2021/09/Good-food-logo-design-on-transparent-background-PNG.png" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
              </div>
                <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img src="https://oleholehkhasbandung.com/wp-content/uploads/2018/02/2333714_562fb04a-bcd3-40da-bcc3-37287ac8fe5a.png" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
              </div>
                <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUc0e245HPrWbBDp5hpp6o0U60U7BJW2J8MA&s" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
              </div>
                <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoFSWnj2dGHiwnp4_I-EVlMvt153fbg9m-Yg&s" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
              </div>  
                <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
            <div class="bg-white rounded-xl shadow p-2 text-center">
              <div class="aspect-square">
                <img src="https://i.pinimg.com/474x/59/5f/a5/595fa5ffb3d67f62ceabaa0d9a40d1e2.jpg" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
              </div>
                <h3 class="text-sm font-semibold">Nama Tempat</h3>
                <p class="text-xs text-gray-500">Deskripsi singkat</p>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="px-6 pb-10">
        <img src="banner_waste.png" class="w-full rounded-xl shadow-lg mb-6">
    </section>

    <!-- Partner Invitation Section -->
    <section class="bg-white px-6 py-10 flex flex-col md:flex-row items-center justify-between gap-6 rounded-xl shadow mx-6">
      <div class="aspect-square max-w-32">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoFSWnj2dGHiwnp4_I-EVlMvt153fbg9m-Yg&s" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
      </div>
        <div class="flex-1 text-center md:text-center">
            <p class="text-lg font-bold mb-2">Ingin menggabungkan usaha anda di platform kami?</p>
            <button class="font-bold bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-amber-500">KLIK DI SINI</button>
        </div>
    </section>
</div>

@endsection