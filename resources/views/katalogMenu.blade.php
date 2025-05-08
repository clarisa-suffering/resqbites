@extends('layout')

@section('content')
    <div class="p-6 flex flex-col items-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4xl3LMgqqnKZug_c3DBMZGONWkIvVj-NNRw&s"
            class="object-cover rounded-full mx-auto mb-1" />
        <div class="text-lg font-semibold">Izuka Kitchen</div>
    </div>
    {{-- search bar --}}
    <div class="px-5 pt-5">
        <form class="max-w-md mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-blue-500"
                    placeholder="Cari Menu (ex: Ayam Goreng)" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-orange-500 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
            </div>
        </form>
    </div>

    {{-- Katalog Menu --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6 bg-gray-100">

        {{-- Card Menu 1 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg"
                alt="Ayam Goreng Mentega" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Ayam Goreng Mentega</h2>
                <p class="text-gray-600 text-sm mb-2">Nasi dengan ayam goreng saus mentega.</p>
                <div class="flex justify-between space-x-2">
                    <span class="text-sm text-gray-500 line-through">Rp 25.000</span>
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">-20%</span>
                </div>
                <span class="text-md text-red-600 font-bold">Rp 20.000</span>
                <div class="mt-4 flex justify-end">
                    <button class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm hover:bg-amber-600"
                        onclick="showSuccessAlert()">+</button>
                </div>
            </div>
        </div>

        {{-- Card Menu 2 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeO8HCOrfPiFV7JaDhcCvolvrvone7yzz1jg&s"
                alt="Mie Ayam Bakso" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Mie Ayam Bakso</h2>
                <p class="text-gray-600 text-sm mb-2">Mie ayam lengkap dengan bakso kenyal dan sayuran.</p>
                <div class="flex justify-between space-x-2">
                    <span class="text-sm text-gray-500 line-through">Rp 20.000</span>
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">-20%</span>
                </div>
                <span class="text-md text-red-600 font-bold">Rp 16.000</span>
                <div class="mt-4 flex justify-end">
                    <button class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm hover:bg-amber-600">+</button>
                </div>
            </div>
        </div>

        {{-- Card Menu 3 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://i.ytimg.com/vi/R0mDzP0A_DQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCKevZCAetrLVnQIhN9FBW8vvPfcg"
                alt="Sate Ayam Bumbu Kacang" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Sate Ayam Bumbu Kacang</h2>
                <p class="text-gray-600 text-sm mb-2">Sate ayam empuk dengan bumbu kacang khas Jawa.</p>
                <div class="flex justify-between space-x-2">
                    <span class="text-sm text-gray-500 line-through">Rp 25.000</span>
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">-20%</span>
                </div>
                <span class="text-md text-red-600 font-bold">Rp 20.000</span>
                <div class="mt-4 flex justify-end">
                    <button class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm hover:bg-amber-600">+</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        function showSuccessAlert() {
            Swal.fire({
                title: 'Success!',
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
