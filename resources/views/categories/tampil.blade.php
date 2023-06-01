@extends('layout.master')

@section('title')
    Tampil categories
@endsection
@section('content')
    <a href="/categories/create" class="btn btn-sm btn-primary">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->name }}</td>
                    {{-- <td>{{$value->umur}}</td> --}}
                    {{-- <td>{{$value->bio}}</td> --}}
                    <td>
                        <form action="/categories/{{ $value->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a class="btn btn-info btn-sm" href="/categories/{{ $value->id }}">Detail</a>
                            <a class="btn btn-warning btn-sm" href="/categories/{{ $value->id }}/edit">Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th>Tidak ada categories</th>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
