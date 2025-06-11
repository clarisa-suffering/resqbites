@extends('layout')

@section('content')
<div class="bg-white min-h-screen ">
    <!-- Header banner -->
    <div class="bg-green-800 text-white text-left px-6 py-10 relative overflow-hidden">
        <h1 class="text-3xl font-bold px-6 py-10">Thank you for <br><span class="text-orange-400">ResQing the Bites!</span></h1>
        <div class="absolute bottom-0 right-0 w-1/3 h-50 bg-orange-500 rounded-tl-full"></div>
    </div>

    <!-- Status pengiriman -->
    <div class="text-center mt-10 py-8 px-4">
        <img src="/fooddelivery.png" class="mx-auto w-24 h-24 mb-4" alt="Delivery Icon" />
        <h2 class="text-xl font-semibold text-gray-800">Pesanan sedang dikirim!</h2>
        <p class="text-lg mt-1">Pesanan akan sampai dalam: <span class="font-bold text-black">20 menit</span></p>
    </div>

    <!-- Carousel promo -->
    <div class="relative max-w-6xl mx-auto mt-10 py-8 px-4">
        <!-- Viewport untuk 4 gambar -->
        <div class="overflow-hidden">
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <!-- Slide 1 -->
                <div class="flex gap-4 shrink-0 w-full justify-center">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_ayam.jpg" alt="poster ayam">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_bakso.jpeg" alt="poster bakso">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_croissant.jpeg" alt="poster croissant">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_udangkeju.jpeg" alt="poster udangkeju">
                </div>
                <!-- Slide 2 -->
                <div class="flex gap-4 shrink-0 w-full justify-center">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_eskrim.jpg" alt="poster ayam">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_pizza.jpg" alt="poster bakso">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_ricebox.jpg" alt="poster croissant">
                    <img class="h-48 w-auto rounded-xl shadow-md" src="/poster_minimarket.jpg" alt="poster udangkeju">
                </div>
            </div>
        </div>

        <!-- Tombol kiri-kanan -->
        <button id="prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-100 hover:bg-gray-300 shadow-md p-2 rounded-full z-10">
            <svg class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
        </button>
        <button id="next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-100 hover:bg-gray-300 shadow-md p-2 rounded-full z-10">
            <svg class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </button>


        <!-- Dots -->
        <div class="flex justify-center mt-4 space-x-2">
            <button class="dot w-3 h-3 bg-gray-400 rounded-full"></button>
            <button class="dot w-3 h-3 bg-gray-300 rounded-full"></button>
        </div>
    </div>

    <script>
        const carousel = document.getElementById('carousel');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = dots.length;
        let currentSlide = 0;
        let autoPlayInterval;

        function showSlide(index) {
            const slideWidth = carousel.children[0].offsetWidth;
            carousel.style.transform = `translateX(-${index * slideWidth}px)`;

            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-gray-400', i === index);
                dot.classList.toggle('bg-gray-300', i !== index);
            });

            currentSlide = index;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        document.getElementById('prev').addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
            resetAutoplay();
        });

        document.getElementById('next').addEventListener('click', () => {
            nextSlide();
            resetAutoplay();
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                showSlide(i);
                resetAutoplay();
            });
        });

        function startAutoplay() {
            autoPlayInterval = setInterval(nextSlide, 4000); // 4 detik
        }

        function resetAutoplay() {
            clearInterval(autoPlayInterval);
            startAutoplay();
        }

        // Inisialisasi
        showSlide(0);
        startAutoplay();
    </script>

</div>
@endsection