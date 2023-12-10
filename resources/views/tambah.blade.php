@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br>
    <br>

    <div class="container">
        <form action="/pegawai/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="umur">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="alamat">
                </div>
            </div>
            <div class="form-group row">
                <input type="Submit" class="btn btn-primary"></button>
            </div>
    </div>
    </form>

    </body>
@endsection
