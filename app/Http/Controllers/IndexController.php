<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;

class IndexController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $categories = Categories::all();
        return View("index", ["products" => $product, "categories" => $categories]);
    }
}
