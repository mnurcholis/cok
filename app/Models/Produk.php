<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Mendefinisikan relasi Many-to-Many dengan model Kategori
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'produk_kategoris', 'produk_id', 'kategori_id');
    }

    // Mendefinisikan relasi One-to-Many dengan model Gambar
    public function gambar()
    {
        return $this->hasMany(Gambar_produks::class, 'produk_id');
    }
}
