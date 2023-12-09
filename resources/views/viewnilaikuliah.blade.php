@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')


    <br />
    <br />

    @foreach ($nilaikuliah as $p)
        <div class="row">
            <div class="col-md-5 border">

            </div>
            <div class="col-md-7">
                @foreach ($nilaikuliah as $p)
                    <div class="row mb-3">
                        <div class="col-sm-2">Nama</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $p->nilaikuliah_ID }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Jabatan</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $p->nilaikuliah_NRP }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Umur</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $p->nilaikuliah_NilaiAkhir }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Alamat</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $p->nilaikuliah_SKS }}</div>
                    </div>
                    <a href="/pegawai" button type="button" class="btn btn-primary" > 0K </a>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
