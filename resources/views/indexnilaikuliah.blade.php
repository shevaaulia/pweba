@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h1>Nilai Kuliah XX</h1>
    <h3>Nilai Kuliah Per Mahasiswa</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai </a>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>NilaiAngka</th>
            <th>SKS</th>
            <th>Opsi</th>
        </tr>
        @foreach ($nilaikuliah as $p)
            <tr>
                <td>{{ $p->nilaikuliah_ID }}</td>
                <td>{{ $p->nilaikuliah_NRP }}</td>
                <td>{{ $p->nilaikuliah_NilaiAngka}}</td>
                <td>{{ $p->nilaikuliah_SKS }}</td>
            </tr>
        @endforeach
    </table>

    {{ $nilaikuliah->links() }}
@endsection
