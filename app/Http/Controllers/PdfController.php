<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Categories;
use App\Models\Product;



class PDFController extends Controller
{
    public function DownloadCategory()
    {
        $categories = Categories::all();
        $pdf = PDF::loadView('categories.pdf', compact('categories'));
        return $pdf->download('categories.pdf');
    }
    public function DownloadProduct()
    {
        $products = Product::all();
        $categories = Categories::all();
        $pdf = PDF::loadView('product.pdf', compact('products', 'categories'));
        return $pdf->download('product.pdf');
    }
}
