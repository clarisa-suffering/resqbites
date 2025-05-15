@extends('layout')

@section('content')
<section class="py-10 px-6">
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

@endsection