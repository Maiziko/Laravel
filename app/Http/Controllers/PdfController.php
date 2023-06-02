<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Categories;



class PdfController extends Controller
{
    public function DownloadCategory()
    {
        $categories = Categories::all();
        $pdf = PDF::loadView('categories.pdf', compact('categories'));
        return $pdf->download('categories.pdf');
    }
}