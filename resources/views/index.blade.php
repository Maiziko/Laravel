@extends('layout.master')

@section('content')
<div class="row">
   
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Category</h5>
                <p class="card-text">{{ count($categories) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Product</h5>
                <p class="card-text">{{ count($products) }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
