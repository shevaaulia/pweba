<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Sepeda</title>
</head>
<body>

    <h3>Data Sepeda</h3>

    <a href="/sepeda"> Kembali</a>

    <br />
    <br />

	@foreach($sepeda as $s)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $s->kodesepeda}}">
        <div class="form-group">
            <label for="mk">Merk:</label>
            <input type="text" required="required" name="mk" value="{{ $s->merksepeda }}" class="form-control" id="mk">
        </div>
        <br>
        <div class="form-group">
            <label for="st">Stock:</label>
            <input type="text" required="required" name="st" value="{{ $s->stocksepeda }}" class="form-control" id="st">
        </div>
        <br>
        <div class="form-group">
            <label for="tsd">Ketersediaan:</label>
            <input type="text" required="required" name="tsd" value="{{ $s->tersedia }}" class="form-control" id="tsd">
        </div>
        <br>
        <input type="submit" value="Simpan Data" >
    </form>
	@endforeach

</body>
</html>
