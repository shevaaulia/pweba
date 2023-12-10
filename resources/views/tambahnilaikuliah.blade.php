@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')

    <div class="container">
        <h3>Nilai Kuliah Per Mahasiswa</h3>

        <a href="/nilaikuliah"> Kembali</a>

        <br />
        <br />

        <form action="/nilaikuliah/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="NRP" class="col-xl-1 col-form-label">NRP</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="NRP" name="NRP">
                </div>
            </div>
            <div class="form-group row">
                <label for="NilaiAngka" class="col-xl-1 col-form-label">Nilai Akhir</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
                </div>
            </div>
            <div class="form-group row">
                <label for="SKS" class="col-xl-1 col-form-label">SKS</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="SKS" name="SKS">
                </div>
            </div>
            <input type="Submit" class="btn btn-primary"></button>
        </form>
    </div>
@endsection
