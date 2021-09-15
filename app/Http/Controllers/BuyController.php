<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function show(Request $request, Product $product)
    {
        return Inertia::render('Buy/Show', [
            'product' => $product
        ]);
    }
}
