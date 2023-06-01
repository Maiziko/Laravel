@extends('layout.master')

@section('title')
    Product
@endsection
@section('content')

<a href="product/create" class="btn btn-sm btn-primary">Create Product</a>

<div class="row">
    @forelse ($products as $product)
    <div class="col-md-3 mt-3">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('image/' . $product->image) }}" alt="" class="img-fluid">
                <h5 class="card-title mt-3">{{ $product->name }}</h5>
                <p class="mb-3">{{ Str::limit( $product->description , 100)}}</p>
                <a href="/product/{{ $product->id }}" class="btn btn-sm btn-info">Detail</a>
                <a href="/product/{{ $product->id }}/edit" class="btn btn-sm btn-warning text-white">Edit</a>
                <form action="/product/{{ $product->id }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    @empty
    <div class="col-md-12">
        <h3 class="text-center">Data Kosong</h3>
    </div>
    @endforelse
</div>

@endsection
