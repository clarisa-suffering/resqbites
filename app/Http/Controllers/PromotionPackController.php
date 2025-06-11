<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionPack;

class PromotionPackController extends Controller
{
    
    // Tampilkan semua promotion packs
    public function index()
    {
        $promotions = PromotionPack::all();
        return view('promotionpacks.index', compact('promotions'));
    }

    // Tampilkan form buat promotion pack baru
    public function create()
    {
        return view('promotionpacks.create');
    }

    // Simpan data promotion pack baru
    public function store(Request $request)
    {
        $request->validate([
            'promotion_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
        ]);

        PromotionPack::create($request->all());

        return redirect()->route('promotionpacks.index')->with('success', 'Promotion pack berhasil ditambahkan');
    }

    // Tampilkan form edit promotion pack
    public function edit($id)
    {
        $promotion = PromotionPack::findOrFail($id);
        return view('promotionpacks.edit', compact('promotion'));
    }

    // Update data promotion pack
    public function update(Request $request, $id)
    {
        $request->validate([
            'promotion_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
        ]);

        $promotion = PromotionPack::findOrFail($id);
        $promotion->update($request->all());

        return redirect()->route('promotionpacks.index')->with('success', 'Promotion pack berhasil diperbarui');
    }

    // Hapus promotion pack
    public function destroy($id)
    {
        $promotion = PromotionPack::findOrFail($id);
        $promotion->delete();

        return redirect()->route('promotionpacks.index')->with('success', 'Promotion pack berhasil dihapus');
    }
}
