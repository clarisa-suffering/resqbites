@extends('layout')

@section('content')
<div class="bg-gray-100">
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
                <div class="text-green-600 font-bold harga-item" data-price="20000">Rp 20.000</div>
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
                    
                    <!-- Dropdown Payment -->
                    <div class="relative w-full mt-4">
                        <hr>
                        <br>
                        <button id="paymentDropdownButton"
                            class="bg-green-600 hover:bg-green-700 w-full text-white py-2 rounded-lg font-semibold flex justify-between items-center px-4">
                            <span class="payment-label">Cash</span>
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
                            <span id="subtotal">Rp 20.000</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Biaya Pengiriman:</span>
                            <span>Rp 5.000</span>
                        </div>
                        <div class="flex justify-between font-bold text-orange-600 text-lg border-t pt-2">
                            <span>Total:</span>
                            <span id="total">Rp 25.000</span>
                        </div>
                    </div>
                    <!-- Tombol Pesan -->
                    <button id="orderButton" class="w-full bg-gray-900 hover:bg-gray-800 text-white mt-4 py-2 rounded-lg font-bold flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h16v2H4zm0 6h16v2H4zm0 6h10v2H4z"/>
                        </svg>
                        Pesan
                    </button>
                </div>
            </div>
        </div>
    <!-- Script Interaksi -->
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Kuantitas + -
    const decrementBtn = document.querySelector('button.bg-gray-200:nth-of-type(1)');
    const incrementBtn = document.querySelector('button.bg-gray-200:nth-of-type(2)');
    const qtyInput = document.querySelector('input[type="text"]');
    const hargaItem = document.querySelector('.harga-item');
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');
    const biayaKirim = 5000;

    function updateHarga() {
        const harga = parseInt(hargaItem.dataset.price);
        const qty = parseInt(qtyInput.value);
        const subtotal = harga * qty;
        const total = subtotal + biayaKirim;
        subtotalEl.innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
        totalEl.innerText = 'Rp ' + total.toLocaleString('id-ID');
    }

    if (decrementBtn && incrementBtn && qtyInput) {
        decrementBtn.addEventListener('click', () => {
            let value = parseInt(qtyInput.value);
            if (value > 1) qtyInput.value = value - 1;
            updateHarga();
        });

        incrementBtn.addEventListener('click', () => {
            let value = parseInt(qtyInput.value);
            qtyInput.value = value + 1;
            updateHarga();
        });
    }

    // Antar / Ambil
    const methodContainer = document.querySelector('.flex.justify-between.bg-gray-100');
    const methodBoxes = methodContainer.querySelectorAll('div.text-center');

    if (methodBoxes.length === 2) {
        methodBoxes.forEach((box, idx) => {
            box.style.cursor = 'pointer';
            box.addEventListener('click', () => {
                methodBoxes.forEach(b => {
                    b.classList.remove('bg-white', 'shadow', 'border', 'border-green-500');
                    const textDiv = b.querySelector('div:nth-child(2)');
                    textDiv.classList.replace('text-green-600', 'text-gray-600');
                });

                box.classList.add('bg-white', 'shadow', 'border', 'border-green-500');
                const textDiv = box.querySelector('div:nth-child(2)');
                textDiv.classList.replace('text-gray-600', 'text-green-600');
            });
        });
    }

    // Dropdown pembayaran
    const dropdownBtn = document.getElementById('paymentDropdownButton');
    const dropdownMenu = document.getElementById('paymentDropdown');

    if (dropdownBtn && dropdownMenu) {
        dropdownBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        dropdownMenu.querySelectorAll('a').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const label = item.innerText;
                dropdownBtn.querySelector('.payment-label').innerText = label;
                dropdownMenu.classList.add('hidden');
            });
        });

        // Optional: close dropdown if clicked outside
        document.addEventListener('click', (e) => {
            if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    }


    // Redirect tombol Pesan
    const orderBtn = document.getElementById('orderButton');
    if (orderBtn) {
        orderBtn.addEventListener('click', () => {
            window.location.href = "/order/delivery";
        });
    }
});
</script>

@endsection