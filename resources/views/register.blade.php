@extends('layout')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-orange-600 mb-6">Daftar Akun</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded px-4 py-2" required>
            </div>

            <button type="submit" class="w-full bg-orange-600 text-white font-semibold py-2 rounded hover:bg-orange-700 transition">Daftar</button>
        </form>

        <p class="text-sm text-center text-gray-600 mt-4">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-orange-600 hover:underline">Login</a>
        </p>
    </div>
</div>
@endsection
