<?php

namespace App\Http\Controllers;

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
        $store->latitude = $request->latitude;
        $store->phone = $request->phone;
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

        return redirect()->route('home');

    }
}
