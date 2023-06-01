<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Product;
use File;

class ProfileController extends Controller
{

    public function index()
    {
        // $product = Product::all();
        return View("profile.tampil");
    }
}
