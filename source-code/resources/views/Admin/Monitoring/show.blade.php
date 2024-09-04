@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Products for {{ $user->name }}</h1>
        @if($user->userProduk->isEmpty())
            <p>No products found for this user.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Purchase Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->userProduk as $userProduk)
                        <tr>
                            <td>{{ $userProduk->produk->nama }}</td>
                            <td>{{ $userProduk->pembelian }}</td>
                            <td>
                                <a href="{{ route('monitoring.detail', ['userId' => $user->id, 'produkId' => $userProduk->produk->id]) }}" class="btn btn-info">Monitoring</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
