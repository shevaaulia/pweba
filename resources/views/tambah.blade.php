@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <div class="container">
    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="alamat">
            </div>
        </div>
        <div class="form-group row">
        <input type="submit" value="Simpan Data">
        </div>
    </div>
    </form>

        {{-- Nama <input type="text" name="nama"> <br />
        Jabatan <input type="text" name="jabatan"> <br />
        Umur <input type="number" name="umur"> <br />
        Alamat <textarea name="alamat"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form> --}}



    </body>
@endsection
