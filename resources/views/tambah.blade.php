@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

    <div class="container">
        <h3>Data Pegawai Baru</h3>

        <a href="/pegawai"> Kembali</a>

        <br>
        <br>

        <form action="/pegawai/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-xl-1 col-form-label">Nama</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-xl-1 col-form-label">Jabatan</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-xl-1 col-form-label">Umur</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="umur">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-xl-1 col-form-label">Alamat</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="alamat">
                </div>
            </div>
            <input type="Submit" class="btn btn-primary"></button>
        </form>
    </div>
@endsection
