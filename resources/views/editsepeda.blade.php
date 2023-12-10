<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Sepeda</title>
</head>
<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Sepeda</h3>

    <a href="/sepeda"> Kembali</a>

    <br />
    <br />

	@foreach($sepeda as $s)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $s->kodesepeda}}">
        <div class="form-group">
            <label for="mk">Merk:</label>
            <input type="text" required="required" name="mk" value="{{ $s->merksepeda }}" class="form-control" id="mk">
        </div>
        <br>
        <div class="form-group">
            <label for="st">Stock:</label>
            <input type="text" required="required" name="st" value="{{ $p->stocksepeda }}" class="form-control" id="st">
        </div>
        <br>
        <div class="form-group">
            <label for="tsd">Ketersediaan:</label>
            <input type="text" required="required" name="tsd" value="{{ $p->tersedia }}" class="form-control" id="tsd">
        </div>
        <br>
        {{-- <div class="form-group">
            <label for="alt">Alamat:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_alamat }}" class="form-control" id="alt">
        </div>
        <br> --}}
        <input type="submit" value="Simpan Data" >
    </form>
	@endforeach

</body>
</html>
