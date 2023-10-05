@extends('layout.master')

@section('container')
    <h1 class="text-center">Data buku</h1>
    <table class="table table-striped table-bordered">
            <thead >
                <tr>
                    <th>id</th>
                    <th>Nama_barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>id_supplier</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($barang as $Barang)
                <tr>
                    <td>{{ $Barang->id }}</td>
                    <td>{{ $Barang->nama_barang }}</td>
                    <td>{{ $Barang->harga }}</td>
                    <td>{{ $Barang->stok }}</td>
                    <td>{{ $Barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection