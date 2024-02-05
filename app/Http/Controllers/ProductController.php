<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Products::inRandomOrder()->first();
        $productImages = Images::where("product_id", $product->id)->take(4)->get();
        $allProducts = Products::all();

        return view("product")
            ->with("product", $product)
            ->with("productImages", $productImages)
            ->with("allProducts", $allProducts);
    }
}
