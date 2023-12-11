@extends('master2')

@section('title', 'Data Mahasiswa')

@section('konten')

    <h1>EAS PWEB-A</h1>
    <h3>Data Mahasiswa</h3>

    <br>

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
                    <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    |
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
