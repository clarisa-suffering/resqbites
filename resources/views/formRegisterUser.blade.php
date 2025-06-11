<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Tailwind and Flowbite -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <!-- Leaflet Control Geocoder -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

  <title>Form Registrasi dengan Peta</title>

  <style>
    body {
      padding-top: 4rem;
      /* ruang untuk navbar setinggi 4rem (~64px) */
    }

    #map {
      height: 350px;
      width: 100%;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 1rem;
      margin-bottom: 1rem;
      z-index: 0;
      /* pastikan map tidak tumpuk navbar */
      position: relative;
    }
  </style>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6 pt-24">
  <nav class="bg-orange-500 fixed top-0 w-full z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <img class="h-20 w-auto" src="/Logo_Resqbite.png" alt="ResQBite">
        </div>
      </div>
    </div>
  </nav>

  <div id="flash-data"
    data-success-register="{{ session('success_register') }}"
    data-success-login="{{ session('success_login') }}">
  </div>

  <form id="myForm" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg space-y-6"
    action="{{ route('register.store') }}" method="POST">
    @csrf

    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="{{ asset('Logo_Resqbite.png') }}" alt="Logo Resqbite" class="w-40 h-40 object-cover rounded-lg shadow-md" />
    </div>

    <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Form Registrasi</h2>

    <!-- Nama -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
      <input
        type="text"
        id="name"
        name="name"
        placeholder="Masukkan nama lengkap"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        value="{{ old('name') }}"
        required />
      @error('name')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="contoh@domain.com"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        value="{{ old('email') }}"
        required />
      @error('email')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        placeholder="Masukkan password"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        required />
      @error('password')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Konfirmasi Password -->
    <div>
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
      <input
        type="password"
        id="password_confirmation"
        name="password_confirmation"
        placeholder="Masukkan ulang password"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        required />
    </div>

    <!-- No Telp -->
    <div>
      <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No. Telp</label>
      <input
        type="tel"
        id="phone"
        name="phone"
        placeholder="0812xxxxxxx"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        value="{{ old('phone') }}" />
      @error('phone')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Alamat -->
    <div>
      <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
      <input
        type="text"
        id="address"
        name="address"
        placeholder="Jl Siwalankerto Permai III"
        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 shadow-sm"
        value="{{ old('address') }}"
        required
        autocomplete="off" />
      @error('address')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Map -->
    <div id="map" aria-label="Peta lokasi"></div>

    <!-- Latitude dan Longitude (readonly) -->
    <div>
      <label for="latitude" class="block text-sm font-medium text-gray-700 mb-1">Latitude</label>
      <input
        type="text"
        id="latitude"
        name="latitude"
        readonly
        class="w-full rounded-lg border border-gray-300 px-4 py-2 bg-gray-100 cursor-not-allowed shadow-sm"
        value="{{ old('latitude') }}"
        required />
      @error('latitude')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="longitude" class="block text-sm font-medium text-gray-700 mb-1">Longitude</label>
      <input
        type="text"
        id="longitude"
        name="longitude"
        readonly
        class="w-full rounded-lg border border-gray-300 px-4 py-2 bg-gray-100 cursor-not-allowed shadow-sm"
        value="{{ old('longitude') }}"
        required />
      @error('longitude')
      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Submit -->
    <div>
      <button
        type="submit"
        class="w-full bg-amber-500 text-white py-3 rounded-lg font-semibold hover:bg-amber-600 focus:outline-none focus:ring-4 focus:ring-amber-300 transition">
        Submit
      </button>
    </div>
<p class="text-sm text-center text-gray-600 mt-4">
            Sudah punya akun? <a href="{{ url('/login') }}" class="text-orange-600 hover:underline">Login</a>
        </p>
  </form>

  <!-- Leaflet Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addressInput = document.getElementById('address');
      const latitudeInput = document.getElementById('latitude');
      const longitudeInput = document.getElementById('longitude');

      // Default view: Surabaya area
      const map = L.map('map').setView([-7.2756, 112.6426], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      let marker = null;

      function setMarker(latlng, popupText) {
        if (marker) {
          marker.setLatLng(latlng);
        } else {
          marker = L.marker(latlng, {
            draggable: true
          }).addTo(map);
          // Jika marker digeser, update koordinat input
          marker.on('dragend', function() {
            const pos = marker.getLatLng();
            latitudeInput.value = pos.lat.toFixed(6);
            longitudeInput.value = pos.lng.toFixed(6);
          });
        }
        if (popupText) marker.bindPopup(popupText).openPopup();

        latitudeInput.value = latlng.lat.toFixed(6);
        longitudeInput.value = latlng.lng.toFixed(6);
      }

      // Jika ada nilai lama (old value) dari form validation, set marker di situ
      const oldLat = parseFloat(latitudeInput.value);
      const oldLng = parseFloat(longitudeInput.value);
      if (!isNaN(oldLat) && !isNaN(oldLng)) {
        setMarker({
          lat: oldLat,
          lng: oldLng
        }, 'Lokasi Anda');
        map.setView([oldLat, oldLng], 15);
      }

      // Geocoding saat alamat diubah (enter key)
      addressInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          const query = addressInput.value;
          if (query.length > 3) {
            L.Control.Geocoder.nominatim().geocode(query, function(results) {
              if (results.length > 0) {
                const result = results[0];
                setMarker(result.center, result.name);
                map.setView(result.center, 15);
              } else {
                Swal.fire({
                  icon: 'warning',
                  title: 'Lokasi tidak ditemukan',
                  text: 'Coba masukkan alamat yang lebih lengkap atau berbeda.',
                });
              }
            });
          }
        }
      });

      // Klik map untuk set marker
      map.on('click', function(e) {
        setMarker(e.latlng, 'Lokasi Anda');
      });
      const flashData = document.getElementById('flash-data');
      const successRegister = flashData.dataset.successRegister;
      const successLogin = flashData.dataset.successLogin;

      if (successRegister) {
        Swal.fire({
          icon: 'success',
          title: 'Registrasi Berhasil!',
          text: successRegister,
          timer: 2500,
          showConfirmButton: false,
          toast: true,
          position: 'top-end',
        });
      }

      if (successLogin) {
        Swal.fire({
          icon: 'success',
          title: 'Login Berhasil!',
          text: successLogin,
          timer: 2500,
          showConfirmButton: false,
          toast: true,
          position: 'top-end',
        });
      }
    });
  </script>

</body>

</html>