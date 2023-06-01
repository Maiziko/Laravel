@extends('layout.master')

@section('title')
    Detail Categories
@endsection
@section('content')
    <h2>Categories Name : {{ $categories->name }}</h2>
    <h2>Description </h2>
    <p>{{ $categories->description }} </p>
@endsection
