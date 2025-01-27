@extends('layout.master')

@section('title')
    Edit categories
@endsection
@section('content')
    <form action="/categories/{{ $categories->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" value={{ $categories->name }} class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Category Description</label>
            <textarea name="description" id="myeditorinstance"  class="@error('description') is-invalid @enderror form-control" cols="30"
                rows="10">{{ $categories->description }}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
