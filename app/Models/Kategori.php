<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'produk_kategoris', 'kategori_id', 'produk_id');
    }
}
