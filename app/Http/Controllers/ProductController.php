<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return View("product.tampil", ["products" => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('product.tambah', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required|min:5",
                "price" => "required|min:3",
                "stock" => "required",
                "image" => "required|mimes:jpg,png,jpeg|max:2048",
                "description" => "required",
                "categories_id" => "required",
            ]
        );

        $imageName = time() . "." . $request->image->extension();
        $request->image->move(public_path("image"), $imageName);


        $product = new Product;
        $product->name = $request->input("name");
        $product->price = $request->input("price");
        $product->stock = $request->input("stock");
        $product->image = $imageName;
        $product->description = $request->input("description");
        $product->categories_id = $request->input("categories_id");


        $product->save();
        return redirect("/product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("product.detail", ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Categories::all();
        return view("product.edit", ["product" => $product, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate(
            [
                "name" => "required|min:5",
                "price" => "required|min:3",
                "stock" => "required",
                "image" => "mimes:jpg,png,jpeg|max:2048",
                "description" => "required",
                "categories_id" => "required",
            ]
        );

        $product = Product::find($id);
        $product->name = $request->input("name");
        $product->price = $request->input("price");
        $product->stock = $request->input("stock");
        $product->description = $request->input("description");
        $product->categories_id = $request->input("categories_id");

        if ($request->has("image")) {
            $path = 'image/';
            File::delete($path . $product->image);
            $newImageName = time() . "." . $request->image->extension();
            $request->image->move(public_path("image"), $newImageName);
            $product->image = $newImageName;
        }

        $product->save();
        return redirect("/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Product::find($id);
        $path = 'image/';
        File::delete($path . $produk->image);
        $produk->delete();
        return redirect("/product");
    }
}
