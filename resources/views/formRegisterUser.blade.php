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

  <title>Leaflet Form</title>
</head>
<body class="bg-gray-100">
  <form id="myForm" class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow space-y-4">
    <div class="aspect-square w-[4.5rem]">
      <img src="Logo_Resqbite.png" class="rounded-lg object-cover w-full h-full mx-auto mb-1">
  </div>
  <div class="text-center mb-3">
      <h2 class="text-xl font-bold mb-6">Form Registrasi</h2>
  </div>
  <div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
      <input type="text" name="name" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
      <input type="email" name="email" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
      <input type="password" name="password" class="w-full border-gray-300 rounded-lg shadow-sm" required />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">No. Telp</label>
      <input type="tel" name="phone" class="w-full border-gray-300 rounded-lg shadow-sm" />
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
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
  
      // ✅ This is the correct and modern usage
      const geocoder = L.Control.Geocoder.nominatim();
  
      // 📍 Get coordinates when address is typed
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
  
      // 🌍 Manual coordinate selection from map
      map.on('click', function (e) {
        const latlng = e.latlng;
        latitudeInput.value = latlng.lat.toFixed(6);
        longitudeInput.value = latlng.lng.toFixed(6);
        setMarker(latlng, 'Manually selected');
      });
    });


    function showSuccessAlert() {
    Swal.fire({
      title: 'Success!',
      text: 'Akun berhasil dibuat!',
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
