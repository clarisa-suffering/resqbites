@extends('layout')

@section('content')
<div class="bg-white min-h-screen py-8 px-4">
    <!-- Header banner -->
    <div class="bg-green-800 text-white text-left rounded-2xl px-6 py-10 relative overflow-hidden">
        <h1 class="text-3xl font-bold">Thank you for <br><span class="text-orange-400">ResQing the Bites!</span></h1>
        <div class="absolute bottom-0 right-0 w-1/3 h-full bg-orange-500 rounded-tl-full"></div>
    </div>

    <!-- Status pengiriman -->
    <div class="text-center mt-10">
        <img src="/fooddelivery.png" class="mx-auto w-24 h-24 mb-4" alt="Delivery Icon" />
        <h2 class="text-xl font-semibold text-gray-800">Pesanan sedang dikirim!</h2>
        <p class="text-lg mt-1">Pesanan akan sampai dalam: <span class="font-bold text-black">20 menit</span></p>
    </div>

    <!-- Carousel promo -->
    <div class="mt-10">
        <div class="relative overflow-hidden">
            <div class="flex justify-center gap-4 overflow-x-auto px-4">
                <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_ayam.jpg" alt="poster ayam">
                <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_bakso.jpeg" class="w-48 rounded-xl shadow-md" alt="poster bakso">
                <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_croissant.jpeg" class="w-48 rounded-xl shadow-md" alt="poster croissant">
                <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_udangkeju.jpeg" class="w-48 rounded-xl shadow-md" alt="poster udangkeju">
            </div>
        </div>
    </div>
</div>
@endsection
