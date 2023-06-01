@extends('layout.master')

@section('title')
    Tambah Category
@endsection
@section('content')
    <form action="/categories" method="POST">
        @csrf
        <div class="form-group">
            <label>categories Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>categories Description</label>
            <textarea type="text" name="description" class="@error('name') is-invalid @enderror form-control"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
