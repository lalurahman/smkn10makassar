<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            Kategori::create([
                'nama' => 'Akademik',
            ]);

            Kategori::create([
                'nama' => 'Ekstrakurikuler',
            ]);

            Kategori::create([
                'nama' => 'Perlombaan',
            ]);

            Kategori::create([
                'nama' => 'Kegiatan',
            ]);

            Kategori::create([
                'nama' => 'Viral',
            ]);
    }
}
