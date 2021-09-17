<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class BagController extends Controller
{
    public function show(Request $request)
    {
        $bags = isset($_COOKIE['b']) ? collect(json_decode($_COOKIE['b'], true)) : collect();

        $products = Product::whereIn('id', $bags->keys())->get();

        $subtotal = $products->sum(function ($product) use ($bags) {
            return $product['price'] * $bags[$product->id]['q'];
        });

        return Inertia::render('Bag', [
            'products' => $products->map(function ($product) use ($bags) {
                return array_merge($product->toArray(), [
                    'quantity' => $bags[$product->id]['q']
                ]);
            }),
            'subtotal' => $subtotal,
            'tax' => round($subtotal * 0.05),
        ]);
    }
}
