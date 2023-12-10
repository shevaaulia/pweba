<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>

    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group">
            <label for="nm">Nama:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control" id="nm">
        </div>
        <br>
        <div class="form-group">
            <label for="jbt">Jabatan:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_jabatan }}" class="form-control" id="jbt">
        </div>
        <br>
        <div class="form-group">
            <label for="umr">Umur:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_umur }}" class="form-control" id="umr">
        </div>
        <br>
        <div class="form-group">
            <label for="alt">Alamat:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_alamat }}" class="form-control" id="alt">
        </div>
        <br>
        <input type="submit" value="Simpan Data" >
    </form>

	@endforeach

</body>
</html>
