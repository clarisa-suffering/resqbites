@extends('userLayout')

@section('content')
<div id="default-carousel" class="relative w-full aspect-[3/1]" data-carousel="slide">
    <div class="relative w-full h-full overflow-hidden rounded-b-xl">
        @foreach ([
        'Carousel_ResQbite_1.png',
        'https://helpcenter-cms-assets.grab.com/helpcenter/grab/merchant/id/id/4409826486681/4409826486681-Artikel.png',
        'Carousel_Burger_3.png',
        'Carousel_Minimarket_4.png',
        'Carousel_Dimsum_2.png',
        'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/healthy-eating-discount-deal-facebook-image-design-template-17b4185744e7da51809d40e929c4c70f_screen.jpg?ts=1643913523'
        ] as $image)
        <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
            <img src="{{ $image }}" class="absolute inset-0 w-full h-full object-cover" alt="carousel image">
        </div>
        @endforeach

        <!-- Controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 ring-1 ring-white">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 ring-1 ring-white">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </span>
        </button>
    </div>

    <!-- Terdekat Dengan Anda -->
    <section class="py-10 px-6 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Terdekat Dengan Anda</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ([
            ['img' => 'https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg', 'store' => 'Izuka Kitchen', 'name' => 'Ayam goreng mentega'],
            ['img' => 'https://i.ytimg.com/vi/Q6nmR-jN0Jc/hq720.jpg', 'store' => 'Depot SGP', 'name' => 'Ricebowl ayam teriyaki'],
            ['img' => 'https://img-global.cpcdn.com/recipes/cfccce6fba971208/1200x630cq70/photo.jpg', 'store' => 'Dapoer Mama', 'name' => 'Capcay seafood'],
            ] as $item)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition-shadow duration-300 p-4">
                <div class="relative aspect-[2/1] overflow-hidden rounded-lg mb-2">
                    <img src="{{ $item['img'] }}" class="object-cover w-full h-full" alt="{{ $item['name'] }}">
                    <div class="absolute top-2 right-2 bg-red-600 text-white text-xs font-bold px-2 py-0.5 rounded-lg shadow">-20%</div>
                </div>
                <p class="text-sm text-orange-600 mb-1">{{ $item['store'] }}</p>
                <h3 class="text-lg font-semibold text-gray-900">{{ $item['name'] }}</h3>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Sedang Buka Sekarang -->
    <section class="py-10 px-6 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Sedang Buka Sekarang</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach ([
            ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s', 'name' => 'Izuka Kitchen', 'address' => 'Jl. Siwalankerto', 'link' => '/katalog'],
            ['img' => 'https://image.similarpng.com/file/similarpng/original-picture/2021/09/Good-food-logo-design-on-transparent-background-PNG.png', 'name' => 'Dapur Enak', 'address' => 'Jl. Merdeka No. 1'],
            ['img' => 'https://oleholehkhasbandung.com/wp-content/uploads/2018/02/2333714_562fb04a-bcd3-40da-bcc3-37287ac8fe5a.png', 'name' => 'Prima Rasa', 'address' => 'Jl. Manyar Indah No. 3000'],
            ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUc0e245HPrWbBDp5hpp6o0U60U7BJW2J8MA&s', 'name' => 'IBC', 'address' => 'Jl. Darmahusada ABC'],
            ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoFSWnj2dGHiwnp4_I-EVlMvt153fbg9m-Yg&s', 'name' => 'Mie Pinangsia', 'address' => 'Jl. Siwalankerto No. 50'],
            ['img' => 'https://i.pinimg.com/474x/59/5f/a5/595fa5ffb3d67f62ceabaa0d9a40d1e2.jpg', 'name' => 'Depot Masak', 'address' => 'Jl. Kutisari No. 123']
            ] as $store)
            <a href="{{ $store['link'] ?? '#' }}"
                class="bg-white rounded-xl shadow hover:shadow-lg transition-shadow duration-300 p-4 text-center focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <div class="aspect-square overflow-hidden mb-2">
                    <img src="{{ $store['img'] }}"
                        class="rounded-lg object-cover w-full h-full mx-auto transition-transform duration-300 group-hover:scale-105"
                        alt="{{ $store['name'] }}">

                </div>
                <h3 class="text-sm font-semibold text-gray-900">{{ $store['name'] }}</h3>
                <p class="text-xs text-gray-500">{{ $store['address'] }}</p>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Banner Section -->
    <section class="px-6 pb-10 max-w-7xl mx-auto">
        <img src="banner_waste.png" class="w-full rounded-xl shadow-lg" alt="Waste Awareness Banner">
    </section>
</div>
@endsection