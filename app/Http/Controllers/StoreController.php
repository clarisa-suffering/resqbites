<?php

    namespace App\Http\Controllers;

    use App\Models\PromotionPack;
    use App\Models\Store;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Storage;

    class StoreController extends Controller
    {
        public function insert(Request $request)
        {
            // Validasi data (hapus selectedIds karena tidak dipakai)
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'close_time' => 'required|date_format:H:i',
                'address' => 'required|string|max:255',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'phone' => 'required|string|max:20',
                'logo' => 'nullable|image|max:2048', // max 2MB
            ]);

            $store = new Store();
            $store->name = $validated['name'];
            $store->close_time = $validated['close_time'];
            $store->address = $validated['address'];
            $store->latitude = $validated['latitude'];
            $store->longitude = $validated['longitude'];
            $store->phone = $validated['phone'];
            $store->user_id = Auth::id() ?? 1; // fallback ke user 1 jika belum login

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                $store->photo_name = $fileName;
                $store->photo_path = Storage::url($filePath);
            }

            $store->save();

            // Simpan promo default (misal promotion_id = 1)
            PromotionPack::create([
                'promotion_id' => 1,  // promo default
                'store_id' => $store->id,
            ]);

            return redirect()->route('home')->with('success', 'Store berhasil ditambahkan dengan promo default.');
        }
    }
