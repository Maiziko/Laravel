<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class CategoriesController extends Controller
{
    // Penambahan Halaman untuk merealisasikan Laravel CRUD 
    public function create()
    {
        return view('categories.tambah');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('categories.tampil', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // validasi data terisi atau tidak 
        $request->validate([
            'name' => 'required|alpha|min:5',
            'description' => 'required',
        ]);

        DB::table('categories')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect('/categories')->with('status', 'Category created successfully.');
    }

    public function show($id)
    {
        $categories = Categories::find($id);

        return view('categories.detail', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $categories = DB::table('categories')->find($id);

        return view('categories.edit', ['categories' => $categories]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|min:5',
            'description' => 'required',
        ]);

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

        return redirect('/categories');
    }

    // Metode untuk menghapus Row Data pada tabel categories
    public function destroy($id)
    {
        DB::table('categories')
            ->where('id', '=', $id)
            ->delete();

        return redirect('/categories');
    }
}
