<head>
    <title>Shevaa's Cat House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Background -->
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Help</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">How to Adopt</a>
                    <a class="dropdown-item" href="#">How to Send Donation</a>
                    <a class="dropdown-item" href="#">Sign-In Issue</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Adoption</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Available Cats</a>
                    <a class="dropdown-item" href="#">Featured Cats</a>
                    <a class="dropdown-item" href="#">Adoption Application</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Volunteer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Meet Our Cats!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Donation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Send Love to Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sign-In</a>
                <div class="dropdown-menu">
                    <form class="form-inline" action="/action_page.php">
                        <input class="form-control mr-sm-2" type="text" placeholder="Sign-In">
                        <button class="btn btn-success" type="submit">Sign-In</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Container -->
    <div class="container pt-4 pb-4">
        <div class="text-center">
            <h1><b>Shevaa's Cat House</b></h1>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carousel 1.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="carousel 2.jpg" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="carousel 3.jpg" alt="New York">
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <br>

    <!-- Description -->
    <div class="container">
    <p class="text-center">
        Hi, warmest hug and surely big welcome gifts are coming for you! Shevaa's Cat House here standing to provide
        a safe shelter and open adoption for lovely cats out there in Indonesia. Moreover, we provide
        you the loveliest and warmest way to interact with our lovely cats and kittens.
        We have hundred of cats waiting to be patted and hugged by you. You can also give them food and play with them as long as you want. Adoption are
        allowed, especially for those who need an affection from our lovely buddy cats!
        To ensure that those who are seriously interested in adopting can spend time with the cats, priority is given to visitors who have submitted an adoption application,
        whether or not they have been interviewed and approved to adopt. If you’re interested in adoption, please see our “adoption” page.
        We continue to accept donations and to offer claw-clipping services to our alumni.
    </p>
    </div>
    <br>

    <!-- Featured Cats -->
    <h1><b>
            <p class="text-center">Featured Cats</p>
        </b></h1>
    <br>

    <!-- Grid kolom 3 -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="cat 1.jpg" class="mx-auto d-block" width="300px" >
                <p class="text-center">"Meow" said Lucy. Lucy has been a really nice girl around people these past 2 months.
                    She likes to approach you first and clingy around you wanting to be patted. She's really calm
                    yet still very playful! She likes playing with ball and any other cat's toys.
                </p>
            </div>
            <div class="col">
                <img src="cat 2.jpg" class="mx-auto d-block" width="300px">
                <p class="text-center">Wow! what a beautiful cat right there! Her name is jessica, but many people call her
                    jessy with 'y', there's no specific reason why. She becomes one of the most calm cat that we have here.
                    She has a really soft purr sound and of course she has a really beutiful eyes. Blue eyes!
                </p>
            </div>
            <div class="col">
                <img src="cat 3.jpg" class="mx-auto d-block" width="300px">
                <p class="text-center"> May i introduce you, our loveliest kitten right here! Browny, actually sounds yummy, right?
                    He's such a good and obedient kitten. He likes to circle you aroud and play with your things, such as backpack.
                    He likes when you give him food, especially wet food. Oh, fun fact, he still drink milk! haha.

                </p>
            </div>
        </div>
    </div>
</body>
</html>
