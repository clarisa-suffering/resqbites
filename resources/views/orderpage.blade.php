@extends('layout')

@section('content')
<body class="bg-gray-100">
    <div class="min-h-screen p-6">
        <!-- Kontainer utama -->
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-md p-6">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <img class="h-24 w-auto" src="Logo_Resqbite.png" alt="ResQBite">
                    <div>
                        <div class="text-sm text-gray-700">Jl. Siwalankerto No. 121–131, Surabaya</div>
                        <a href="#" class="text-xs text-orange-500">Ubah Lokasi</a>
                    </div>
                </div>
                <a href="{{ url('/')}}" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-bold">Kembali ke Halaman Utama</a>
            </div>

            <!-- Judul -->
            <div class="bg-green-700 text-white text-lg font-semibold px-4 py-2 rounded-t-xl flex items-center gap-2">
                <img class="h-5 w-auto" src="basket.png" alt="ResQBite">
                Keranjang
            </div>

            <!-- Item -->
            <div class="flex items-center border-b px-4 py-4">
                <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20230211-Ayam-goreng-mentega.jpg" alt="Ayam Goreng Mentega" class="w-24 h-24 rounded-lg object-cover">
                <div class="ml-4 flex-1">
                    <div class="text-green-600 font-bold">Rp 20.000</div>
                    <div class="text-lg font-medium">Ayam Goreng Mentega</div>
                    <div class="text-sm text-orange-600">Izuka Kitchen</div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                    <input type="text" value="1" class="w-10 text-center border rounded">
                    <button class="bg-gray-200 px-2 py-1 rounded">+</button>
                    <button class="ml-2 text-red-500">✕</button>
                </div>
            </div>

            <!-- Metode Pengiriman dan Ringkasan -->
            <div class="flex justify-between mt-6 px-4">
                <!-- Metode -->
                <div class="w-1/2 pr-2">
                    <div class="flex justify-between bg-gray-100 p-4 rounded-xl">
                        <div class="text-center w-1/2 border-r">
                            <img class="h-10 w-auto justify-self-center" src="delivery.png" alt="Delivery">
                            <div class="text-green-600 font-bold">Antar</div>
                            <div class="text-sm">Tiba 14:00</div>
                        </div>
                        <div class="text-center w-1/2">
                            <img class="h-10 w-auto justify-self-center" src="market.png" alt="Market">
                            <div class="text-gray-600 font-bold">Ambil di Resto</div>
                            <div class="text-sm">Tersedia 13:45</div>
                        </div>
                    </div>
                    
                    <div class="relative w-full mt-4">
                        <hr>    
                        <br>
                        <button id="paymentDropdownButton" data-dropdown-toggle="paymentDropdown"
                            class="bg-green-600 hover:bg-green-700 w-full text-white py-2 rounded-lg font-semibold flex justify-between items-center px-4">
                            <span>Cash</span>
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div id="paymentDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-full mt-2 absolute">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Cash</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">QRIS</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">E-Wallet</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Transfer Bank</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Ringkasan -->
                <div class="w-1/2 pl-2">
                    <div class="bg-gray-100 p-4 rounded-xl">
                        <div class="flex justify-between mb-2">
                            <span>Sub Total:</span>
                            <span>Rp 20.000</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Biaya Pengiriman:</span>
                            <span>Rp 5.000</span>
                        </div>
                        <div class="flex justify-between font-bold text-orange-600 text-lg border-t pt-2">
                            <span>Total:</span>
                            <span>Rp 25.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-900 hover:bg-gray-800 text-white mt-4 py-2 rounded-lg font-bold flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h16v2H4zm0 6h16v2H4zm0 6h10v2H4z"/>
                        </svg>
                        Pesan
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection