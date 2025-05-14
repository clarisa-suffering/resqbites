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
<body class="bg-gray-100">
  <form id="myForm" action="{{ route('insertStore') }}" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow space-y-4">
    @csrf
    <div class="aspect-square w-[4.5rem]">
        <img src="Logo_Resqbite.png" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
    </div>
    <div class="text-center mb-3">
        <h2 class="text-xl font-bold mb-6">Form Pendaftaran UMKM</h2>
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Logo Usaha</label>
      <input type="file" name="logo" accept="image/*" class="w-full border-gray-300 shadow-sm" required>
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Nama Usaha</label>
      <input type="text" name="name" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Usaha</label>
      <input type="text" name="address" id="address" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
     <!-- Map -->
    <div id="map" class="max-w-xl mx-auto my-6" style="height: 400px;"></div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Latitude</label>
      <input type="text" name="latitude" id="latitude" class="w-full border-gray-300 rounded-lg shadow-sm" readonly required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Longitude</label>
      <input type="text" name="longitude" id="longitude" class="w-full border-gray-300 rounded-lg shadow-sm" readonly required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Close Time</label>
      <input type="time" name="close_time" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
        <input type="tel" name="phone" class="w-full border-gray-300 rounded-lg shadow-sm" />
      </div>
    
      <h2 class="text-lg font-bold mb-4">Paket Promosi</h2>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <!-- CARD EXAMPLES -->
          <!-- 6 cards -->
          <div data-id="1" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700  flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Promosi Notifikasi Email</h5>
            <p class="text-xs text-gray-700 dark:text-gray-400">Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi</p>
            <div class="mt-auto">
              <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 25.000</s></p>
              <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 15.000</p>
            </div>
          </div>
          <div data-id="2" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Promosi di Halaman Utama</h5>
            <p class="text-xs text-gray-700 dark:text-gray-400">Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari
              Banner akan ditampilkan kepada 50 user secara acak</p>
              <div class="mt-auto">
                <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 35.000</s></p>
                <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 25.000</p>
              </div>
          </div>
          <div data-id="3" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Promosi Pop-Up</h5>
            <p class="text-sm text-gray-700 dark:text-gray-400">Menampilkan pop-up promosi usaha pada saat user membuka aplikasi yang berlangsung selama 3 hari
              Pop-up ditampilkan kepada 50 user dengan lokasi terdekat dengan tempat usaha</p>
              <div class="mt-auto">
                <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 40.000</s></p>
                <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 30.000</p>
              </div>
          </div>
          <div data-id="4" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Paket Promosi Notifikasi Email + Promosi di Halaman Utama</h5>
            <p class="text-sm text-gray-700 dark:text-gray-400">Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi
              Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak</p>
              <div class="mt-auto">
                <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 55.000</s></p>
                <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 35.000</p>
              </div>
          </div>
          <div data-id="5" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Paket Promosi Notifikasi Email + Promosi Pop-Up</h5>
            <p class="text-sm text-gray-700 dark:text-gray-400">Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi
              Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha</p>
              <div class="mt-auto">
                <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 60.000</s></p>
                <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 40.000</p>
              </div>
          </div>
          <div data-id="6" class="promo-card cursor-pointer max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
            <h5 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Paket Promosi Combo</h5>
            <p class="text-sm text-gray-700 dark:text-gray-400">Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi
              Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha
              Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak</p>
              <div class="mt-auto">
                <p class="text-sm font-semibold text-gray-700 dark:text-gray-400 mt-3"><s>Rp 70.000</s></p>
                <p class="text-sm font-semibold text-red-700 dark:text-gray-400">Rp 50.000</p>
              </div>
          </div>
        </div>
      
        <!-- Hidden input to store selected IDs -->
        <input type="hidden" name="selectedIds" id="selectedIds">
      </div>
    <div class="pt-4">
      <button type="submit" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-amber-500">Submit</button>
    </div>
  </form>

  <!-- Leaflet Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const addressInput = document.getElementById('address');
      const latitudeInput = document.getElementById('latitude');
      const longitudeInput = document.getElementById('longitude');
  
      const map = L.map('map').setView([-6.2, 106.8], 5);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);
  
      let marker = null;
  
      function setMarker(latlng, text) {
        if (marker) map.removeLayer(marker);
        marker = L.marker(latlng).addTo(map);
        if (text) marker.bindPopup(text).openPopup();
      }
  
      // This is the correct and modern usage
      const geocoder = L.Control.Geocoder.nominatim();
  
      // Get coordinates when address is typed
      addressInput.addEventListener('blur', function () {
        const address = addressInput.value.trim();
        if (!address) return;
  
        geocoder.geocode(address, function (results) {
          if (results && results.length > 0) {
            const result = results[0];
            const latlng = result.center;
  
            latitudeInput.value = latlng.lat.toFixed(6);
            longitudeInput.value = latlng.lng.toFixed(6);
  
            map.setView(latlng, 13);
            setMarker(latlng, 'Address found');
          } else {
            alert('Address not found.');
          }
        });
      });
  
      //Manual coordinate selection from map
      map.on('click', function (e) {
        const latlng = e.latlng;
        latitudeInput.value = latlng.lat.toFixed(6);
        longitudeInput.value = latlng.lng.toFixed(6);
        setMarker(latlng, 'Manually selected');
      });
    });


  const selectedIds = [];
  const selectedInput = document.getElementById('selectedIds');

  document.querySelectorAll('.promo-card').forEach(card => {
    card.addEventListener('click', function () {
      const id = this.dataset.id;

      if (selectedIds.includes(id)) {
        // Deselect if already selected
        selectedIds.splice(selectedIds.indexOf(id), 1);
        this.classList.remove('border-orange-500', 'ring', 'ring-orange-300');
      } else {
        // Select if not yet selected
        selectedIds.push(id);
        this.classList.add('border-orange-500', 'ring', 'ring-orange-300');
      }

      // Update hidden input value
      selectedInput.value = selectedIds.join(',');
    });
  });


  function showSuccessAlert() {
    Swal.fire({
      title: 'Success!',
      text: 'Usaha anda berhasil didaftarkan!',
      icon: 'success',
      confirmButtonText: 'OK',
      customClass: {
        confirmButton: 'bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded !important'
      },
      buttonsStyling: false
    }).then(() => {
      window.location.href = '/'; // ganti sesuai rute home kamu
    });
  }

  // Tangani submit form
  document.getElementById('myForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Cegah pengiriman form
    showSuccessAlert(); // Tampilkan alert lalu redirect
  });
  </script>
  
</body>
</html>
