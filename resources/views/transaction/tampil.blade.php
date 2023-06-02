@extends('layout.master')

@section('title')
    Transaksi
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Transaksi</th>
                <th scope="col">Username</th>
                <th scope="col">Email User</th>
                <th scope="col">Id User</th>
                <th scope="col">Id Product</th>
                <th scope="col">Bank</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaction as $ts)
                <tr>
                    <td>{{ $ts->transaction_code }}</td>
                    <td>{{ $ts->user_name }}</td>
                    <td>{{ $ts->email_user }}</td>
                    <td>{{ $ts->users_id }}</td>
                    <td>{{ $ts->product_id }}</td>
                    <td>{{ $ts->bank }}</td>
                    <td>{{ $ts->quantity }}</td>
                    <td>{{ $ts->total }}</td>
                    <td>{{ $ts->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        <div class="col-md-12">
                            <h3>Tidak ada transaksi</h3>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
