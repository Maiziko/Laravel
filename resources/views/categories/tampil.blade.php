@extends('layout.master')

@section('title')
    Categories
@endsection

@section('content')
    <a href="/categories/create" class="btn btn-sm btn-primary">Create Category</a>
    <a href="/donwload-category" class="btn btn-sm btn-primary">Generate to PDF</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key => $value)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $value->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="/categories/{{ $value->id }}">Detail</a>
                    <a class="btn btn-warning btn-sm text-white" href="/categories/{{ $value->id }}/edit">Edit</a>
                    <form action="/categories/{{ $value->id }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="category_id" value="{{ $value->id }}">
                        <button type="button" class="btn btn-danger btn-sm delete-button">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3">
                        <div class="col-md-12">
                            <h3>Data Kosong</h3>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
<script>
 $(document).on('click', '.delete-button', function (e) {
    e.preventDefault();
    var form = $(this).closest('.delete-form');
    var categoryId = form.find('input[name="category_id"]').val();

    // Send an AJAX request to delete the category
    $.ajax({
        url: '/categories/' + categoryId,
        type: 'POST',
        data: {
            _method: 'DELETE',
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            Swal.fire({
                title: "Kategori Berhasil dihapus",
                icon: "success",
                confirmButtonText: "Okay",
            }).then(() => {
                    location.reload();
            });
        },
        error: function (xhr) {
            Swal.fire({
                title: "Kategori Gagal dihapus, terdapat produk yang terkait dengan kategori ini",
                icon: "error",
                confirmButtonText: "Okay",
            });
        }
    });
});

@if(session('status'))
    Swal.fire({
        title: "Kategori Berhasil Ditambahkan",
        icon: "success",
        confirmButtonText: "Okay",
    });
@endif
</script>
@endpush
