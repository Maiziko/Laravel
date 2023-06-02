@extends('layout.master')

@section('title')
    Detail Kategori
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Nama Kategori: {{ $categories->name }}</h2>
                <h3 class="mb-3">Deskripsi:</h3>
                <p>{{ $categories->description }}</p>
                @forelse ($categories->product as $product)
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('image/' . $product->image) }}" alt="" class="img-fluid">
                                    <h5 class="card-title mt-3">{{ $product->name }}</h5>
                                    <p class="mt-3">Harga: Rp.{{ $product->price }}</p>
                                    <p class="mt-3">Stok: {{ $product->stock }}</p>
                                    <h5 class="my-3">Kategori: {{ $categories->find($product->categories_id)->name }}</h5>
                                    <p class="mb-3">{{ Str::limit($product->description, 100) }}</p>
                                    <a href="/product/{{ $product->id }}" class="btn btn-sm btn-info">Detail</a>
                                    <a href="/product/{{ $product->id }}/edit"
                                        class="btn btn-sm btn-warning text-white">Edit</a>
                                    <form action="/product/{{ $product->id }}" method="POST"
                                        class="d-inline delete-form">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="button" class="btn btn-danger btn-sm delete-button">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>Kategori ini tidak ada product</h3>
                @endforelse
            </div>
        </div>
    </div>
    </div>
@endsection
