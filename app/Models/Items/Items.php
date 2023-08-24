<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_items',
        'nama_items',
        'deskripsi_items',
        'harga_items',
        'stock_items',
        'kategoris_id',
        'realeases_id',
        'nilai_items',
        'items_photo_path',
    ];
}