<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.css" rel="stylesheet" />
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <form id="myForm" class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow space-y-4">
        <!-- Name -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
          <input type="text" name="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>
      
        <!-- Email -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" name="email" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>
      
        <!-- Password -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type="password" name="password" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>
      
        <!-- Phone -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
          <input type="tel" name="phone" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
      
        <!-- Address -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
          <input type="text" name="address" id="address" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>
      
        <!-- Latitude -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Latitude</label>
          <input type="text" name="latitude" id="latitude" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly required>
        </div>
      
        <!-- Longitude -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Longitude</label>
          <input type="text" name="longitude" id="longitude" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly required>
        </div>
      
        <!-- Submit Button -->
        <div class="pt-4">
          <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
            Submit
          </button>
        </div>
      </form>
      
      <!-- JavaScript for free geocoding -->
      <script>
      document.addEventListener('DOMContentLoaded', function () {
        const addressInput = document.getElementById('address');
        const latitudeInput = document.getElementById('latitude');
        const longitudeInput = document.getElementById('longitude');
      
        addressInput.addEventListener('blur', async function () {
          const address = addressInput.value.trim();
          if (!address) return;
      
          try {
                const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&countrycodes=id&q=${encodeURIComponent(address)}`, {
                    headers: {
                    'Accept-Language': 'id' // prioritize Bahasa Indonesia results
                    }
            });
      
            const data = await response.json();
            if (data && data.length > 0) {
              const location = data[0];
              latitudeInput.value = location.lat;
              longitudeInput.value = location.lon;
            } else {
              alert('Address not found, please check.');
            }
          } catch (error) {
            console.error('Error fetching geocode:', error);
            alert('Failed to fetch location, try again.');
          }
        });
      });
      </script>
      
              
</body>
</html>