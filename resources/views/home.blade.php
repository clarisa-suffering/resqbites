@extends('layout')

@section('content')
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
                            <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg"
                                class="object-cover w-full h-full">
                            <!-- Small rectangle discount tag -->
                            <div
                                class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg">
                                -20%
                            </div>
                        </div>
                        <p class="text-sm text-orange-600 mb-1">Izuka Kitchen</p>
                        <h3 class="text-lg font-semibold">Ayam goreng mentega</h3>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4">
                        <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
                            <img src="https://i.ytimg.com/vi/Q6nmR-jN0Jc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLB-2zVn8ll-7g0bwEB_uINPGk_c3Q"
                                class="object-cover w-full h-full">
                            <!-- Small rectangle discount tag -->
                            <div
                                class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg">
                                -20%
                            </div>
                        </div>
                        <p class="text-sm text-orange-600 mb-1">Depot SGP</p>
                        <h3 class="text-lg font-semibold">Ricebowl ayam teriyaki</h3>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4">
                        <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
                            <img src="https://img-global.cpcdn.com/recipes/cfccce6fba971208/1200x630cq70/photo.jpg"
                                class="object-cover w-full h-full">
                            <!-- Small rectangle discount tag -->
                            <div
                                class="absolute top-2 right-2 bg-red-600 text-white text-[20px] font-bold px-2 py-0.5 rounded-lg">
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
                    <a href="/katalog">
                        <div class="bg-white rounded-xl shadow p-2 text-center">
                            <div class="aspect-square">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s"
                                    class="object-cover w-full h-full rounded-lg mx-auto mb-1" />
                            </div>
                            <h3 class="text-sm font-semibold">Izuka Kitchen</h3>
                            <p class="text-xs text-gray-500">Jl. Siwalankerto</p>
                        </div>
                    </a>
                    <div class="bg-white rounded-xl shadow p-2 text-center">
                        <div class="aspect-square">
                            <img src="https://image.similarpng.com/file/similarpng/original-picture/2021/09/Good-food-logo-design-on-transparent-background-PNG.png"
                                class="rounded-lg object-cover w-full h-full mx-auto mb-1">
                        </div>
                        <h3 class="text-sm font-semibold">Dapur Enak</h3>
                        <p class="text-xs text-gray-500">Jl. Merdeka No. 1</p>
                    </div>
                    <div class="bg-white rounded-xl shadow p-2 text-center">
                        <div class="aspect-square">
                            <img src="https://oleholehkhasbandung.com/wp-content/uploads/2018/02/2333714_562fb04a-bcd3-40da-bcc3-37287ac8fe5a.png"
                                class="rounded-lg object-cover w-full h-full mx-auto mb-1">
                        </div>
                        <h3 class="text-sm font-semibold">Prima Rasa</h3>
                        <p class="text-xs text-gray-500">Jl. Manyar Indah No. 3000</p>
                    </div>
                    <div class="bg-white rounded-xl shadow p-2 text-center">
                        <div class="aspect-square">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUc0e245HPrWbBDp5hpp6o0U60U7BJW2J8MA&s"
                                class="rounded-lg object-cover w-full h-full mx-auto mb-1">
                        </div>
                        <h3 class="text-sm font-semibold">IBC</h3>
                        <p class="text-xs text-gray-500">Jl. Darmahusada ABC</p>
                    </div>
                    <div class="bg-white rounded-xl shadow p-2 text-center">
                        <div class="aspect-square">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoFSWnj2dGHiwnp4_I-EVlMvt153fbg9m-Yg&s"
                                class="rounded-lg object-cover w-full h-full mx-auto mb-1">
                        </div>
                        <h3 class="text-sm font-semibold">Mie Pinangsia</h3>
                        <p class="text-xs text-gray-500">Jl. Siwalankerto No. 50</p>
                    </div>
                    <div class="bg-white rounded-xl shadow p-2 text-center">
                        <div class="aspect-square">
                            <img src="https://i.pinimg.com/474x/59/5f/a5/595fa5ffb3d67f62ceabaa0d9a40d1e2.jpg"
                                class="rounded-lg object-cover w-full h-full mx-auto mb-1">
                        </div>
                        <h3 class="text-sm font-semibold">Depot Masak</h3>
                        <p class="text-xs text-gray-500">Jl. Kutisari No. 123</p>
                    </div>
                </div>
            </section>

            <!-- Banner Section -->
            <section class="px-6 pb-10">
                <img src="banner_waste.png" class="w-full rounded-xl shadow-lg mb-6">
            </section>
        </div>
    @endsection
