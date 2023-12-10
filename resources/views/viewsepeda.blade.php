@extends('master2')

@section('title', 'Data Sepeda')

@section('konten')


    <br />
    <br />

    @foreach ($sepeda as $s)
        <div class="row">
            <div class="col-md-5 border">

            </div>
            <div class="col-md-7">
                @foreach ($sepeda as $s)
                    <div class="row mb-3">
                        <div class="col-sm-2">Kode</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->kodesepeda }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Merk</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->merksepeda }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Stock</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->stocksepeda}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Ketersediaan</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->tersedia}}</div>
                    </div>
                    <a href="/pegawai" button type="button" class="btn btn-primary" > 0K </a>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
