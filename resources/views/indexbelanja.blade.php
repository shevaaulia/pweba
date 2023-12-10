@extends('master2')

@section('title', 'Data Barang')

@section('konten')

    <h3>Keranjang Belanja Anda</h3>
    <a href="/indexBarang/addbarang" class="btn btn-success">Beli</a>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ $k->Harga }}</td>
                <td>{{ $k->Harga * $k->Jumlah }}</td>
                <td>

                    <a href="/indexbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
