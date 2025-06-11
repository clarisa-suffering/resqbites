<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        $promos = [
            1 => [
                'name' => 'Notifikasi Email',
                'price' => '15000',
                'discount' => '25000',
                'description' => 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi.'
            ],
            2 => [
                'name' => 'Halaman Utama',
                'price' => '25000',
                'discount' => '35000',
                'description' => 'Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari Banner akan ditampilkan kepada 50 user secara acak.'
            ],
            3 => [
                'name' => 'Pop-Up',
                'price' => '30000',
                'discount' => '40000',
                'description' => 'Menampilkan pop-up promosi usaha pada saat user membuka aplikasi yang berlangsung selama 3 hari Pop-up ditampilkan kepada 50 user dengan lokasi terdekat dengan tempat usaha.'
            ],
            4 => [
                'name' => 'Email + Halaman Utama',
                'price' => '35000',
                'discount' => '55000',
                'description' => 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak.'
            ],
            5 => [
                'name' => 'Email + Pop-Up',
                'price' => '40000',
                'discount' => '60000',
                'description' => 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha.'
            ],
            6 => [
                'name' => 'Combo',
                'price' => '50000',
                'discount' => '70000',
                'description' => 'Mengirimkan 1x notifikasi email kepada 50 user bahwa usaha baru saja bergabung ke aplikasi Menampilkan pop-up promosi usaha pada saat user membuka aplikasi selama 3 hari kepada 50 user dengan lokasi terdekat dengan tempat usaha Menampilkan banner tentang usaha di bagian slider di Halaman Utama selama 3 hari kepada 50 user secara acak.'
            ],
        ];

        foreach ($promos as $id => $promo) {
            DB::table('promotions')->updateOrInsert(
                ['id' => $id],
                [
                    'name' => $promo['name'],
                    'price' => $promo['price'],
                    'discount' => $promo['discount'],
                    'description' => $promo['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
