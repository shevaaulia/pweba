<html>

<head>
    <title> Belajar CSS </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="mystyle.css">
    <style>
        body {
            background-color: aquamarine;
            color: blueviolet;
            padding: 25px 50px 75px 100px;
        }

        p {
            text-align: center;
        }

        .ratakanan {
            text-align: right;
            text-transform: uppercase;
            font-weight: bold;
        }

        .warnaharga {
            color: #000000;
        }
    </style>
</head>

<body>
    <!--Inline CSS, digunakan untuk setting speisifik hanya di 1 bagian-->
    Hai, <b style="color: red;
text-shadow: 2px 2px #000000
">apa</b> kabar?
    <!--Inpage CSS, digunakan untuk setting yang berbeda di halaman ini saja-->
    <div class="ratakanan warnaharga">Hai, apa kabar?</div>
    <!--External File, digunakan untuk setting global 1 situs-->
    <span class="sembunyi">Hai, apa kabar?</span>
    <p>Hai, apa kabar?</p>
</body>

</html>
