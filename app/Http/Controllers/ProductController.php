<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Products::inRandomOrder()->first();
        $allProducts = Products::all();

        return view("product")
            ->with("product", $product)
            ->with("allProducts", $allProducts);
    }
}
