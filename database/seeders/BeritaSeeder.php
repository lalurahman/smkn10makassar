<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $judul = "Berita ke-$i";
            Berita::create([
                'judul' => $judul,
                'slug' => Str::slug($judul),
                'isi' => 'Ini adalah isi dari berita ke-' . $i,
                'gambar' => 'image',
                'kategori_berita_id' => 'Umum',
                'penulis' => 'Admin',
                'ditampilkan_pada' => now(),
            ]);
        }
    }
}
