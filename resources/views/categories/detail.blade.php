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
            </div>
        </div>
    </div>
@endsection
