<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasFactory;
    protected $fillable = [
        "judul",
        "konten",
        "tanggal_terbit",
        "gambar"

    ];
}