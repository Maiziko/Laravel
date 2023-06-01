@extends('layout.master')

@section('title')
    Detail Product
@endsection
@section('content')
    <h2>Product Name : {{ $product->name }}</h2>
    <h2>Description </h2>
    <p>{{ $product->description }} </p>
@endsection
