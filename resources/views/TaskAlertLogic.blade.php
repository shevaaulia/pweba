<html lang="en">

<head>
    <title> Validation Form Login </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swall Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function validateForm() {
            //defaultnya adalah return true
            //jika return false, maka form tidak dikirim
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var phone = document.getElementById("phone");

            if (name.value == "");
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
            return false;
        }
    </script>

</head>

<body>
    <div class="container" style="padding-top: 100px;">
        <form action="https://www.google.com" onsubmit="return true ;">
            <div class="form-group">
                <label for="name"> Nama Mahasiswa :</label>
                <input id="name" type="text" class="form-control" placeholder="Name" />
             </div>
            <div class="form-group">
                <label for="email"> Email Mahasiswa :</label>
                <input id="email" type="text" class="form-control" placeholder="Email" required />
            </div>
            <div class="form-group">
                <label for="phone"> Nomor Mahasiswa :</label>
                <input id="phone" type="text" class="form-control" placeholder="Phone" required />
            </div>
            <input type="submit" class="btn btn-dark" value="KIRIM">
        </form>
    </div>
</body>

</html>
