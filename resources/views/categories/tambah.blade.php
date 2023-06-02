@extends('layout.master')

@section('title')
    Create Category
@endsection
@section('content')
    <form action="/categories" method="POST">
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Category Description</label>
            <textarea name="description" id="myeditorinstance"  class="@error('description') is-invalid @enderror form-control" cols="30"
            rows="10"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
