@extends('master2')

@section('title', 'Data Sepeda')

@section('konten')

    <h1>Database Sepeda</h1>
    <h3>Data Sepeda</h3>

    <a href="/sepeda/tambah" class="btn btn-primary"> + Tambah Sepeda</a>

    <br>
    <p>Cari Data Sepeda :</p>
	<form action="/sepeda/cari" method="GET" class="form-inline">
		<input type="cari" name="cari" class="form-control" placeholder="Cari Sepeda .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepeda as $s)
            <tr>
                <td>{{ $s->kodesepeda }}</td>
                <td>{{ $s->merksepeda }}</td>
                <td>{{ $s->stocksepeda }}</td>
                <td>{{ $s->tersedia }}</td>
                <td>
                    {{-- <a href="/sepeda/view/{{ $s->pegawai_id }}" class="btn btn-success">View</a>
                    | --}}
                    <a href="/sepeda/edit/{{ $s->kodesepeda }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sepeda/hapus/{{ $s->kodesepeda }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $sepeda->links() }}
@endsection
