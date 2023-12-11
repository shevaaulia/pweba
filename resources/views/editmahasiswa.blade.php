<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>

    <h3>Data Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br />
    <br />

	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $m->NRP }}">
        <div class="form-group">
            <label for="nrp">NRP:</label>
            <input type="text" name="nrp" value="{{ $m->NRP }}" class="form-control" id="nrp">
        </div>
        <br>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $m->Nama }}" class="form-control" id="nama">
        </div>
        <br>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" value="{{ $m->Jurusan }}" class="form-control" id="jurusan">
        </div>
        <br>
        <div class="form-group">
            <label for="ipk">IPK:</label>
            <input type="text" name="ipk" value="{{ $m->IPK }}" class="form-control" id="ipk">
        </div>
        <br>
        <input type="submit" value="Simpan Data" >
    </form>

	@endforeach

</body>
</html>
