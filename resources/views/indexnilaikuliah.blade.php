@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h1>Data Nilai Kuliah</h1>
    <h3>Nilai Kuliah Per Mahasiswa</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai </a>
    <br>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka}}</td>
                <td>{{ $n->SKS }}</td>

                {{-- if statement --}}
              <td> @if ($n -> NilaiAngka >= 81)
                    A
                @elseif ($n -> NilaiAngka >= 61 && $n -> NilaiAngka <= 80 )
                    B
                @elseif ($n -> NilaiAngka >= 41 && $n -> NilaiAngka <= 60  )
                    C
                @else
                    D
                @endif
              </td>
              {{-- menghitung bobot nilai --}}
                <td>{{ $n->NilaiAngka * $n->SKS}}</td>
            </tr>
        @endforeach
    </table>
@endsection
