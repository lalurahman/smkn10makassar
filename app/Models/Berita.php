<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul', 'slug', 'isi', 'gambar', 'kategori_berita_id', 'penulis', 'ditampilkan_pada'
    ];

    public function kategori()
{
    return $this->belongsTo(Kategori::class);
}

}
