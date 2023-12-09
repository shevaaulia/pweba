@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Nilai Kuliah Per Mahasiswa</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <div class="container">
    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-xs-3 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-xs-3 col-form-label mr-2">Nilai Akhir</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-xs-3 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <div class="form-group row">
        <input type="submit" value="Tambah Data">
        </div>
    </div>
    </form>

    </body>
@endsection
