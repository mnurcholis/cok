<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Mendefinisikan relasi Many-to-Many dengan model Produk
    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'kategori', 'id_kategori', 'id');
    }
}
