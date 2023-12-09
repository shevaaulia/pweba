@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')


    <br />
    <br />

    @foreach ($nilaikuliah as $n)
        <div class="row">
            <div class="col-md-5 border">

            </div>
            <div class="col-md-7">
                @foreach ($nilaikuliah as $n)
                    <div class="row mb-3">
                        <div class="col-sm-2">ID</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $n->ID }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">NRP</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $n->NRP }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">NilaiAngka</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $n->NilaiAngka }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">SKS</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $n->SKS }}</div>
                    </div>
                    <a href="/pegawai" button type="button" class="btn btn-primary" > 0K </a>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
