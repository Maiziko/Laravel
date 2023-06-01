<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'nama' => 'required|alpha|min:5',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ]);

        DB::table('categories')->insert([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/categories');
    }

    public function show($id)
    {
        $categories = DB::table('categories')->find($id);

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
            'nama' => 'required|alpha|min:5',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ]);

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio'),
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
