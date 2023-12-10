@extends('master2')

@section('title', 'Data Barang')

@section('konten')

    <h1>PWEB-A</h1>
    <h3>Keranjang Belanja Anda</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-success">Beli Barang</a>
    <br>
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
                <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($k->Harga * $k->Jumlah, 0, ',', '.') }}</td>

                <td>
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
