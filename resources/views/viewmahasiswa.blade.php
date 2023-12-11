@extends('master2')

@section('title', 'Data Mahasiswa')

@section('konten')


    <br />
    <br />

    @foreach ($mahasiswa as $m)
        <div class="row">
            <div class="col-md-5 border">

            </div>
            <div class="col-md-7">
                @foreach ($mahasiswa as $m)
                    <div class="row mb-3">
                        <div class="col-sm-2">NRP</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $m->NRP }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Nama</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $m->Nama }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Jurusan</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $m->Jurusan }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">IPK</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $m->IPK }}</div>
                    </div>
                    <a href="/mahasiswa" button type="button" class="btn btn-primary" > 0K </a>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
