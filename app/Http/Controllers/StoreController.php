<?php

namespace App\Http\Controllers;

use App\Models\PromotionPack;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function insert(Request $request){
        //buat obj baru
        $store = new Store;
        $store->name = $request->name;
        $store->close_time = $request->close_time;
        $store->address = $request->address;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->phone = $request->phone;
        $store->user_id = 1;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            $store->photo_name = $fileName;
            $store->photo_path = '/storage/' . $filePath;
        }
    
        //insert ke db
        $store->save();

        $storeId = $store->id;

    // Get selected promo IDs from hidden input
    $selectedIdsString = $request->input('selectedIds');  // e.g., "1,3,5"

    if (!empty($selectedIdsString)) {
        $selectedIds = explode(',', $selectedIdsString);  // ['1', '3', '5']

        foreach ($selectedIds as $promoId) {
            $promotionPack = new PromotionPack;
            $promotionPack->promotion_id= $promoId;
            $promotionPack->store_id= $storeId;

            $promotionPack->save();
        }
    }

        return redirect()->route('home');

    }
}
