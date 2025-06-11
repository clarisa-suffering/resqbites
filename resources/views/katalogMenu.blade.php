@extends('layout')

@section('content')
    {{-- Header --}}
    <div class="p-8 flex flex-col items-center shadow-sm bg-gray-100">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s"
            class="w-40 h-auto object-cover rounded-full shadow-md mb-3" />
        <h1 class="text-2xl font-bold text-gray-800">Izuka Kitchen</h1>
        <p class="text-sm text-gray-500">Makanan rumahan lezat dan bergizi</p>
    </div>

    {{-- Search Bar --}}
    <div class="px-5 pt-6 pb-4 bg-gray-100">
        <form class="max-w-xl mx-auto">
            <div class="relative">
                <input type="search" id="default-search"
                    class="block w-full p-3 ps-10 text-sm border rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
                    placeholder="Cari Menu (ex: Ayam Goreng)" required />
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </div>
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-1.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-md text-sm px-4 py-2 shadow">
                    Cari
                </button>
            </div>
        </form>
    </div>

    {{-- Menu Catalog --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-6 py-8 bg-gray-100">

        {{-- Card Template --}}
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

        @foreach ($menus as $menu)
            <div class="bg-white rounded-xl shadow hover:shadow-md transition duration-200 overflow-hidden">
                <img src="{{ $menu['img'] }}" alt="{{ $menu['name'] }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $menu['name'] }}</h2>
                    <p class="text-gray-600 text-sm mb-2">{{ $menu['desc'] }}</p>
                    <div class="flex items-center justify-between mb-2">
                        <div class="text-sm text-gray-400 line-through">{{ $menu['original'] }}</div>
                        <div class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">-20%</div>
                    </div>
                    <div class="text-orange-600 font-bold text-md">{{ $menu['price'] }}</div>
                    <div class="mt-4 flex justify-end">
                        <button onclick="showSuccessAlert()"
                            class="bg-orange-500 hover:bg-orange-600 text-white text-sm px-4 py-2 rounded-full transition">
                            +
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{-- SweetAlert Script --}}
    <script>
        function showSuccessAlert() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Menu berhasil dimasukkan ke keranjang!',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded !important'
                },
                buttonsStyling: false
            });
        }
    </script>
@endsection
