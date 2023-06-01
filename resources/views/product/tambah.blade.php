@extends('layout.master')

@section('title')
    Tambah Product
@endsection
@section('content')
    <form action="/product" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="@error('price') is-invalid @enderror form-control">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" class="@error('stock') is-invalid @enderror form-control">
        </div>
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Category</label>
            <select name="categories_id" class="form-control">
                <option value="">Pilih Categories</option>
                @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <option value="">Data Kosong</option>
                @endforelse
            </select>
        </div>
        @error('categories_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
