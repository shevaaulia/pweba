<html>

<head>
    <title> Responsive Web </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function validateForm() {
            //defaultnya adalah return true
            //jika return false, maka form tidak dikirim
            var nama = document.getElementById("bil1");
            var setuju = document.getElementById("switch1");
            var nrp = document.getElementById("nrp");

            // Swal.fire(setuju.checked);
            // alert(setuju.checked);
            // return false;

            if (nama.value == "") {

                //alert("Nama harus diisi terlebih dahulu")
                nama.focus();
                Swal.fire("Nama harus diisi terlebih dahulu");
                return false; //dibawah ini, tidak akan dijalankan
            }

            if (nrp.value == "") {

                nrp.focus();
                Swal.fire("NRP harus diisi dahulu");
                return false; //dibawah ini, tidak akan dijalankan
            }

            if (isNaN(nrp.value)) {
                nrp.focus();
                Swal.fire("Nrp harus berupa angka");
                return false; //dibawah ini, tidak akan dijalankan
            }

            if (nrp.value.length != 10) {
                nrp.focus();
                Swal.fire("NRP harus  10");
                return false; //dibawah ini, tidak akan dijalankan
            }

            if (nrp.value.substring(0,4) != "5026") {
                nrp.focus();
                Swal.fire("NRP harus terdapat 5026");
                return false; //dibawah ini, tidak akan dijalankan
            }

            if (setuju.checked == false) {
                Swal.fire("Anda harus setuju dengan perjanjian diatas");
                return false; //dibawah ini, tidak akan dijalankan
            }
        }

    </script>
</head>

<body>
    <div class="container">
        <h1> Form Pendaftaran Anggota HMSI </h1>
        <!-- return true, form bisa terkirim apapun kondisinya
        sedangkan retuen false, form tidak terkirim -->
        <form action="https://www.google.com" onsubmit="return validateForm() ;">
            <div class="form-group">
                <label for="bil1"> Nama Mahasiswa :</label>
                <input id="bil1" type="text" class="form-control" placeholder="Harus diisi" />
            </div>
            <div class="form-group">
                <label for="nrp"> NRP Mahasiswa :</label>
                <input id="nrp" type="text" class="form-control" placeholder="Harus diisi 10 digit angka" />
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="switch1">
                <label class="custom-control-label" for="switch1">Saya setuju dengan peraturan diatas</label>
            </div><br>
            <input type="submit" class="btn btn-dark" value="KIRIM">
        </form>
    </div>
</body>

</html>
