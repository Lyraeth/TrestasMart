<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Models\Items\Items;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
        Items::create([
            'kode_items' => request('kode_items'),
            'nama_items' => request('nama_items'),
            'deskripsi_items' => request('deskripsi_items'),
            'harga_items' => request('harga_items'),
            'stock_items' => request('stock_items'),
            'kategoris_id' => request('kategoris_id'),
            'realeases_id' => request('realeases_id'),
            'nilai_items' => request('nilai_items'),
            'items_photo_path' => request('items_photo_path'),
        ]);

        return redirect('additems');
    }
}