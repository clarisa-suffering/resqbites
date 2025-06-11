@extends('layout')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-orange-600 mb-6">Login ke ResQbite</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            </div>

            <button type="submit" class="w-full bg-orange-600 text-white font-semibold py-2 rounded hover:bg-orange-700 transition">Login</button>
        </form>

        <p class="text-sm text-center text-gray-600 mt-4">
            Belum punya akun? <a href="{{ url('/formRegisterUser') }}" class="text-orange-600 hover:underline">Daftar</a>
        </p>
    </div>
</div>
@endsection
