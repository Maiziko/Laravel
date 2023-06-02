@extends('layout.master')

@section('title')
    Detail Produk
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Nama Produk: <small>{{ $product->name }}</small></h2>
                <h3 class="mb-3">Harga: <small>Rp.{{ $product->price }}</small></h3>
                <h3 class="mb-3">Stok: <small>{{ $product->stock }}</small></h3>
                <h3 class="mb-3">Kategori: <small>{{ $categories->find($product->categories_id)->name }}</small></h3>
                <h3 class="mb-3">Deskripsi Produk:</h3>
                <p>{{ $product->description }}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('image/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
