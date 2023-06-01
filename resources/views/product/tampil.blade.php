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
                <form action="/product/{{ $product->id }}" method="POST" class="d-inline delete-form">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="button" class="btn btn-danger btn-sm delete-button">Delete</button>
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



@push('scripts')
<script>
 $(document).on('click', '.delete-button', function (e) {
    e.preventDefault();
    var form = $(this).closest('.delete-form');
    var productId = form.find('input[name="product_id"]').val();

    // Send an AJAX request to delete the category
    $.ajax({
        url: '/product/' + productId,
        type: 'POST',
        data: {
            _method: 'DELETE',
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            Swal.fire({
                title: "Produk Berhasil dihapus",
                icon: "success",
                confirmButtonText: "Okay",
            }).then(() => {
                    location.reload();
            });
        },
        error: function (xhr) {
            Swal.fire({
                title: "Produk Gagal dihapus",
                icon: "error",
                confirmButtonText: "Okay",
            });
        }
    });
});


@if(session('status'))
    Swal.fire({
        title: "Produk Berhasil Ditambahkan",
        icon: "success",
        confirmButtonText: "Okay",
    });
@endif
</script>
@endpush