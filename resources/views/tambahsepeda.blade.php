@extends('master2')

@section('title', 'Data Sepeda')

@section('konten')

    <div class="container">
        <h3>Data Sepeda Baru</h3>

        <a href="/sepeda"> Kembali</a>

        <br />
        <br />

        <form action="/sepeda/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merk" class="col-xl-1 col-form-label">Merk</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-xl-1 col-form-label">Stock</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="stock" name="stock">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-xl-1 col-form-label">Tersedia</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="tersedia" name="tersedia">
                </div>
            </div>
            <input type="Submit" class="btn btn-primary"></button>
        </form>
    </div>
@endsection
