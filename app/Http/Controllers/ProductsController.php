<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    function index() : View
    {
        $json = file_get_contents(storage_path('json/products.json'));
        $data = json_decode($json, true);
        $products = $data['products'];

        return view('products.index', [
            'products' => $products
        ]);
    }

    function details($slug) : View
    {
        $json = file_get_contents(storage_path('json/products.json'));
        $data = json_decode($json, true);
        $products = $data['products'];

        $product = null;
        foreach ($products as $p) {
            if ($p['slug'] === $slug) {
                $product = $p;
                break;
            }
        }

        $otherProducts = array_values(array_filter($products, function ($p) use ($slug) {
            return ($p['slug'] ?? null) !== $slug;
        }));

        return view('products.details', [
            'product' => $product,
            'otherProducts' => $otherProducts
        ]);
    }
}
