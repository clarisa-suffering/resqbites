<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Valerie Alexia',
                'email' => 'c14230205@john.petra.ac.id',
                'password' => Hash::make('c14230205'), // password terenkripsi
                'phone' => '082213262287',
                'address' => 'Jl. Siwalankerto Permai III',
                'latitude' => -7.29594300,
                'longitude' => 112.77952400,
                'role' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Clarisa Estelina',
                'email' => 'c14230199@john.petra.ac.id',
                'password' => Hash::make('c14230199'),
                'phone' => '089876543210',
                'address' => 'Jl. Sudirman No.10, Surabaya',
                'latitude' => -7.28919500,
                'longitude' => 112.61703400,
                'role' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aloysia Jennifer',
                'email' => 'c14230191@john.petra.ac.id',
                'password' => Hash::make('c14230191'),
                'phone' => '08912343210',
                'address' => 'Jl. Manyar No.13, Surabaya',
                'latitude' => -7.28919500,
                'longitude' => 112.61703400,
                'role' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
