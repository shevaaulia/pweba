@extends('master2')

@section('title', 'Data Belanja')

@section('konten')

    <div class="container">
        <h3>Data Barang Belanja</h3>

        <a href="/keranjangbelanja"> Kembali</a>

        <br />
        <br />

        <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="KodeBarang" class="col-xl-1 col-form-label">Kode Barang</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-xl-1 col-form-label">Jumlah</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="Harga" class="col-xl-1 col-form-label">Harga</label>
                <div class="col-xs-9">
                    <input type="text" name="Harga" class="form-control" id="Harga" name="Harga">
                </div>
            </div>
            <input type="Submit" class="btn btn-primary"></button>
        </form>
    </div>
@endsection
