@extends('master2')

@section('title', 'Data Sepeda')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Sepeda</h3>

    <a href="/sepeda"> Kembali</a>

    <br />
    <br />

    <div class="container">
    <form action="/sepeda/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kode" class="col-xs-3 col-form-label mr-2">Kode</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
        </div>
        <div class="form-group row">
            <label for="merk" class="col-xs-3 col-form-label mr-2">Merk</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-xs-3 col-form-label mr-2">Stock</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-xs-3 col-form-label mr-2">Ketersediaan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <div class="form-group row">
        <input type="submit" value="Simpan Data">
        </div>
    </div>
    </form>

    </body>
@endsection
