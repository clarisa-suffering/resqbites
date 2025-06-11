@extends('layout')

@section('content')
    {{-- Search Bar --}}
    <div class="px-4 py-6 bg-gray-100 shadow-md rounded-b-xl">
        <form class="max-w-xl mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-orange-500 focus:border-orange-500"
                    placeholder="Cari Menu (ex: Ayam Goreng)" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
            </div>
        </form>
    </div>

    {{-- Menu Grid --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 bg-gray-100">
        @php
            $menus = [
                [
                    'image' => 'https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg',
                    'store' => 'Izuka Kitchen',
                    'title' => 'Ayam Goreng Mentega',
                    'desc' => 'Nasi dengan ayam goreng saus mentega.',
                    'price' => 25000,
                    'discount' => 20,
                ],
                [
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeO8HCOrfPiFV7JaDhcCvolvrvone7yzz1jg&s',
                    'store' => 'Izuka Kitchen',
                    'title' => 'Mie Ayam Bakso',
                    'desc' => 'Mie ayam lengkap dengan bakso kenyal dan sayuran.',
                    'price' => 20000,
                    'discount' => 20,
                ],
                [
                    'image' => 'https://i.ytimg.com/vi/R0mDzP0A_DQ/hq720.jpg',
                    'store' => 'Izuka Kitchen',
                    'title' => 'Sate Ayam Bumbu Kacang',
                    'desc' => 'Sate ayam empuk dengan bumbu kacang khas Jawa.',
                    'price' => 25000,
                    'discount' => 20,
                ],
                [
                    'image' => 'https://i.ytimg.com/vi/Q6nmR-jN0Jc/hq720.jpg',
                    'store' => 'Depot SGP',
                    'title' => 'Ricebowl ayam teriyaki',
                    'desc' => 'Ricebowl dengan ayam teriyaki dan sawi.',
                    'price' => 20000,
                    'discount' => 20,
                ],
                [
                    'image' => 'https://img-global.cpcdn.com/recipes/cfccce6fba971208/1200x630cq70/photo.jpg',
                    'store' => 'Dapoer Mama',
                    'title' => 'Capcay seafood',
                    'desc' => 'Capcay isi cumi, udang, bakso ikan, dan sayur.',
                    'price' => 30000,
                    'discount' => 20,
                ],
                [
                    'image' => 'https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/f619ee59-c445-4b1d-8fbf-a102e7ba5c0e_Go-Biz_20200624_095539.jpeg',
                    'store' => 'Depot Merdeka',
                    'title' => 'Nasi Udang',
                    'desc' => 'Nasi dengan lauk udang goreng dan sambal.',
                    'price' => 20000,
                    'discount' => 25,
                ],
            ];
        @endphp

        @foreach ($menus as $menu)
            @php
                $discountedPrice = $menu['price'] - ($menu['price'] * $menu['discount'] / 100);
            @endphp
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition-shadow duration-300  overflow-hidden">
                <img src="{{ $menu['image'] }}" alt="{{ $menu['title'] }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h5 class="text-sm text-orange-600 font-semibold mb-1">{{ $menu['store'] }}</h5>
                    <h3 class="text-lg font-bold text-gray-800">{{ $menu['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-2">{{ $menu['desc'] }}</p>
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-sm text-gray-500 line-through">Rp {{ number_format($menu['price'], 0, ',', '.') }}</span>
                        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">-{{ $menu['discount'] }}%</span>
                    </div>
                    <span class="text-md text-red-600 font-bold">Rp {{ number_format($discountedPrice, 0, ',', '.') }}</span>
                    <div class="mt-4 flex justify-end">
                        <button class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm hover:bg-amber-600" onclick="showSuccessAlert()">+</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function showSuccessAlert() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Menu berhasil dimasukkan ke keranjang!',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded !important'
                },
                buttonsStyling: false
            });
        }
    </script>
@endsection
