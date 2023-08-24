<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Models\Kategoris\Kategoris;
use App\Models\Realeases\Realeases;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('items.index');
    }

    public function add()
    {
        $kategoris = Kategoris::all();
        $realeases = Realeases::all();

        return view('items.partials.add-items', [
            'kategoris' => $kategoris,
            'realeases' => $realeases,
        ]);
    }
}