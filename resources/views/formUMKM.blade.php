<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

  <title>Form Registrasi UMKM</title>
</head>
<!-- [Kepala HTML tetap seperti kode Anda sebelumnya] -->
<!-- ... (jangan diubah bagian head-nya) ... -->

<body class="bg-gray-100">
  <div class="bg-orange-500 top-0 w-full z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <img class="h-20 w-auto" src="/Logo_Resqbite.png" alt="ResQBite">
        </div>
      </div>
    </div>
  </div>
  <form id="myForm" action="{{ route('insertStore') }}" method="POST" enctype="multipart/form-data" class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow space-y-4 mt-6 mb-6">
    @csrf

    <!-- Logo App -->
    <div class="flex justify-center">
      <img src="Logo_Resqbite.png" class="w-20 h-20 object-cover rounded-lg" />
    </div>
    <h2 class="text-center text-2xl font-bold mb-4 text-orange-600">Form Pendaftaran UMKM</h2>

    <!-- Input Fields -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-semibold mb-1">Logo Usaha</label>
        <input type="file" name="logo" accept="image/*" required class="w-full border-gray-300 rounded-md shadow-sm" />
      </div>
      <div>
        <label class="block text-sm font-semibold mb-1">Nama Usaha</label>
        <input type="text" name="name" required class="w-full border-gray-300 rounded-md shadow-sm" />
      </div>
      <div class="md:col-span-2">
        <label class="block text-sm font-semibold mb-1">Alamat Usaha</label>
        <input type="text" id="address" name="address" required class="w-full border-gray-300 rounded-md shadow-sm" />
      </div>
      <div class="md:col-span-2">
        <div id="map" class="w-full rounded-md" style="height: 400px;"></div>
      </div>
      <div>
        <label class="block text-sm font-semibold mb-1">Latitude</label>
        <input type="text" name="latitude" id="latitude" readonly required class="w-full border-gray-300 rounded-md shadow-sm bg-gray-100" />
      </div>
      <div>
        <label class="block text-sm font-semibold mb-1">Longitude</label>
        <input type="text" name="longitude" id="longitude" readonly required class="w-full border-gray-300 rounded-md shadow-sm bg-gray-100" />
      </div>
      <div>
        <label class="block text-sm font-semibold mb-1">Jam Tutup</label>
        <input type="time" name="close_time" required class="w-full border-gray-300 rounded-md shadow-sm" />
      </div>
      <div>
        <label class="block text-sm font-semibold mb-1">No. Telepon</label>
        <input type="tel" name="phone" required class="w-full border-gray-300 rounded-md shadow-sm" />
      </div>
    </div>

    <!-- Promo -->
    <h3 class="text-lg font-semibold mt-6">Paket Promosi</h3>

    <div id="promoContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto"></div>


    <!-- Submit -->
    <div class="pt-4">
      <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-md text-lg font-medium">
        Daftar Sekarang
      </button>
    </div>
  </form>

  <!-- JS: Leaflet & Promo -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('myForm');

      form.addEventListener('submit', function(e) {
        e.preventDefault(); // cegah submit default (bisa dihilangkan jika mau submit normal)

        // Contoh: jalankan validasi atau ajax dulu, lalu tampilkan swal
        // Kalau submit normal, letakkan Swal setelah form submit berhasil diproses di server

        Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: 'Form pendaftaran UMKM berhasil dikirim.',
          confirmButtonColor: '#f97316' // warna oranye sesuai theme tailwind
        }).then(() => {
          // Jika mau submit form setelah alert OK:
          form.submit();
        });
      });
      const promos = {
        1: {
          title: 'Notifikasi Email',
          price: 'Rp 15.000',
          original: 'Rp 25.000',
          description: 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi.'
        },
        2: {
          title: 'Halaman Utama',
          price: 'Rp 25.000',
          original: 'Rp 35.000',
          description: 'Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari Banner akan ditampilkan kepada 50 user secara acak.'
        },
        3: {
          title: 'Pop-Up',
          price: 'Rp 30.000',
          original: 'Rp 40.000',
          description: 'Menampilkan pop-up promosi usaha pada saat user membuka aplikasi yang berlangsung selama 3 hari Pop-up ditampilkan kepada 50 user dengan lokasi terdekat dengan tempat usaha.'
        },
        4: {
          title: 'Email + Halaman Utama',
          price: 'Rp 35.000',
          original: 'Rp 55.000',
          description: 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak.'
        },
        5: {
          title: 'Email + Pop-Up',
          price: 'Rp 40.000',
          original: 'Rp 60.000',
          description: 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha.'
        },
        6: {
          title: 'Combo',
          price: 'Rp 50.000',
          original: 'Rp 70.000',
          description: 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak.'
        }
      };

      const promoContainer = document.getElementById('promoContainer');

      for (const id in promos) {
        const promo = promos[id];
        const div = document.createElement('div');
        div.className = `promo-card cursor-pointer border border-gray-300 rounded-lg p-5 bg-white shadow-sm transition 
  hover:shadow-lg hover:border-orange-500 max-w-xs mx-auto`;
        div.innerHTML = `
      <h5 class="font-semibold text-md text-gray-800 mb-1">${promo.title}</h5>
      <p class="text-sm text-gray-600 mb-2">${promo.description}</p>
      <div class="text-sm">
        <p class="text-gray-400 line-through">${promo.original}</p>
        <p class="text-orange-600 font-semibold">${promo.price}</p>
      </div>
    `;
        promoContainer.appendChild(div);
      }

      const map = L.map('map').setView([-6.2, 106.8], 5);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);
      let marker;
      const addressInput = document.getElementById('address');
      const latInput = document.getElementById('latitude');
      const lngInput = document.getElementById('longitude');
      const geocoder = L.Control.Geocoder.nominatim();

      function setMarker(latlng, text = '') {
        if (marker) map.removeLayer(marker);
        marker = L.marker(latlng).addTo(map);
        if (text) marker.bindPopup(text).openPopup();
      }

      addressInput.addEventListener('blur', () => {
        const address = addressInput.value;
        if (!address) return;
        geocoder.geocode(address, results => {
          if (results.length > 0) {
            const latlng = results[0].center;
            map.setView(latlng, 15);
            latInput.value = latlng.lat.toFixed(6);
            lngInput.value = latlng.lng.toFixed(6);
            setMarker(latlng, 'Lokasi ditemukan');
          }
        });
      });

      map.on('click', e => {
        const latlng = e.latlng;
        latInput.value = latlng.lat.toFixed(6);
        lngInput.value = latlng.lng.toFixed(6);
        setMarker(latlng, 'Dipilih manual');
      });

      // Promo selection
      const selected = [];
      const selectedInput = document.getElementById('selectedIds');
      document.querySelectorAll('.promo-card').forEach(card => {
        card.addEventListener('click', () => {
          const id = card.getAttribute('data-id');
          if (selected.includes(id)) {
            selected.splice(selected.indexOf(id), 1);
            card.classList.remove('ring-2', 'ring-orange-500', 'bg-orange-50');
          } else {
            selected.push(id);
            card.classList.add('ring-2', 'ring-orange-500', 'bg-orange-50');
          }
          selectedInput.value = selected.join(',');
        });
      });
    });
  </script>
</body>

</html>