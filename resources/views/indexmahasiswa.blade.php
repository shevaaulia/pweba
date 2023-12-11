@extends('master2')

@section('title', 'Data Mahasiswa')

@section('konten')

    <h1>EAS PWEB-A</h1>
    <h3>Data Mahasiswa</h3>

    <br>
    {{-- <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET" class="form-inline">
		<input type="cari" name="cari" class="form-control" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    <br> --}}

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m->NRP }}</td>
                <td>{{ $m->Nama }}</td>
                <td>{{ $m->Jurusan}}</td>
                <td>{{ $m->IPK }}</td>
                <td>
                    <a href="/pegawai/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
