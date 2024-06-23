<?php

namespace Database\Seeders;

use App\Models\Pasien;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Pasien::create([
            'nama' => 'Audry',
            'nama_wali' => 'Syahfitri',
            'alamat_pasien' => 'jl. Perbaungan',
        ]);
    }
}
