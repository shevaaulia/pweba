<html>

<head>
    <title> JavaScript </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function changeText() {
            var span = document.getElementById("output"); //membaca object
            var textBox = document.getElementById("textBox"); //membaca object

            textBox.style.color = "red"; //penrintah mirip dengan <input type="text" style="color:red;">
            //span.innerHTML =" System Information";
            span.innerHTML = textBox.value; //mengganti isi yang selain form elemen
            span.className = "text-primary"; //mengganti class CSS
        }
    </script>
    <!-- Library bikin sendiri -->
    <script src="myfunction.js"></script>

</head>

<body>
    <script>
        function showAlert() {
            alert("Congratulation, You Won 1 Million Prize!");
        }
    </script>
    <!-- kalau dia dipanggil dalam bentuk void tidak perlu ditambahkan return,
    tapi kalau dalam bentuk function maka diperlukan return -->
    <button class="btn btn-danger" onclick="showAlert();">Click Here</button>
    <button onclick="changeText();" class="btn btn-success"> Click Me</button>
    <span id="output"> Replace Me</span>
    <input id="textBox" type="text" class="form-control" />
    <br>
    <div class="form-group">
        <label for="bil1"> Bilangan 1 :</label>
        <input id="bil1" type="number" class="form-control" placeholder="Input Bilangan 1" />
    </div>
    <div class="form-group">
        <label for="bil2"> Bilangan 2 :</label>
        <input id="bil2" type="number" class="form-control" placeholder="Input Bilangan 2" />
    </div>
    <div class="btn-group">
        <button onclick="tambah();" class="btn btn-success"> Penjumlahan </button>
        <button onclick="kali();" class="btn btn-success"> Perkalian </button>
    </div>
    <h2> Hasil Operasi = <div id="hasil"></div>
    </h2>
</body>

</html>
