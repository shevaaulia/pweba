<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Sheva Aulia - 5026221145</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000">ETS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    DATABASE
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/pegawai">pegawai</a>
                    <a class="dropdown-item" href="/nilaikuliah">nilaikuliah</a>
                    <a class="dropdown-item" href="/sepeda">sepeda</a>
                    <a class="dropdown-item" href="/keranjangbelanja">keranjangbelanja</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000">ETS</a>
                    <a class="dropdown-item" href="#">EAS</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">

        <hr />
        <br />
        <br />

        <!-- bagian konten blog -->
        @yield('konten')

        @include('footer')

    </div>

</body>

</html>
