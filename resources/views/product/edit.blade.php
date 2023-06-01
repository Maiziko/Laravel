@extends('layout.master')

@section('title')
    Edit Product
@endsection
@section('content')
    <form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" value="{{$product-> name}}" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price"  value="{{$product-> price}}" class="@error('price') is-invalid @enderror form-control">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" value="{{$product-> stock}}" class="@error('stock') is-invalid @enderror form-control">
        </div>
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control">{{$product-> description}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Category</label>
            <select name="categories_id" class="form-control">
                <option value="">Pilih Categories</option>
                @forelse ($categories as $category)
                    @if ($category->id == $product->categories_id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
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
