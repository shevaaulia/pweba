<!doctype html>
<html lang="en">

<head>
    <title>Self-Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- bootsrap popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- other -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <Link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- validasi -->
    <script>
        function validateForm() {
            var nama = document.getElementById("nama");
            var username = document.getElementById("username");
            var pesan = document.getElementById("pesan");

            if (nama.value == "") {
                nama.focus();
                Swal.fire("Nama harus diisi terlebih dahulu");
                return false;
            }

            if (username.value == "") {
                username.focus();
                Swal.fire("Username harus diisi terlebih dahulu");
                return false;
            }

            if (pesan.value == "") {
                pesan.focus();
                Swal.fire("Mohon mengisi pesan");
                return false;
            }
        }
    </script>

    <!-- lihat cv -->
    <script>
        function downloadFile() {
            window.open("CVSheva.pdf")
        }
    </script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg text-uppercase">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">SHEVAA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-lg-0">
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#main">Home</a>
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#about">About Me</a>
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#services">Skills</a>
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#portfolio">Past Experience</a>
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#facts">My Facts</a>
                    <a class="nav-link px-lg-4 rounded" data-toggle="pill" href="#contact">Contact Me</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- home-->
    <section class="main py-5" id="main">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-down-right" data-aos-duration="1000">
                    <h2><small>Hello, I'm</small></h2>
                    <h3>Sheva Aulia</h3>
                    <h6 class="pt-3"> Communication Specialist </h6>
                    <a href="#about" class="btn bt1" role="button">About Me</a>
                    <a href="#" class="btn bt2" role="button" onclick="downloadFile()">My CV</a>
                </div>
            </div>
        </div>
    </section>

    {{-- untuk hyperlink --}}
    <section class= "bg-light py-5">
        <a href = "hello" target = "_blank"> File 1</a> -
        <a href = "js1" target = "_blank"> File 2</a> -
        <a href = "link" target = "_blank"> File 3</a> -
        <a href = "responsive" target = "_blank"> File 4</a> -
        <a href = "style" target = "_blank"> File 5</a> -
        <a href = "Task1" target = "_blank"> File 6</a> -
        <a href = "Task2" target = "_blank"> File 7</a> -
        <a href = "TaskAlertLogic" target = "_blank"> File 8</a> -
        <a href = "TaskLayout" target = "_blank"> File 9</a> -
        <a href = "validasi1" target = "_blank"> File 10</a>

    <!-- about me -->
    <section class="about py-5" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img src="sheva2.jpg" class="img-fluid" class="rounded" alt="" data-aos="fade-right"
                        data-aos-duration="1000">
                </div>
                <div class="col-lg-7" data-aos="fade-down-left" data-aos-duration="1000">
                    <h1>About Me.</h1>
                    <h5>Communication Specialist</h5>
                    <p class="py-3"> <Strong> Hi, Welcome.</Strong><span class="font-weight-bold"> First of all,
                            warmest hug and thank you greeting for all of you!. My name is Sheva Aulia, you can call me
                            Sheva
                            and i'm currently pursuing my bachelor's degree at the
                            Department of Information Systems, Sepuluh Nopember Institute of Technology, Surabaya,
                            Indonesia. I have strong interest in building relationships with new people and like to seek
                            new available
                            opportunities in company's Public Relation fields. I am experienced in managing,
                            facilitating, maintaining, and guiding the community to build good project management. Apart
                            from that, i am dedicated and hardworking with good communication skills, eager to learn
                            new things, like finding solutions to existing situations, proficient in developing
                            effective work schedules, and is responsible for team-oriented projects.</span></p>

                    <h4>Hardskill</h4>
                    <div class="progress my-4">
                        <div class="pro-value1">
                        </div>
                    </div>
                    <h4>Softskill</h4>
                    <div class="progress my-4">
                        <div class="pro-value2">
                        </div>
                    </div>
                    <h4>Interpersonal skill</h4>
                    <div class="progress my-4">
                        <div class="pro-value3">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- skills -->
    <section class="services py-5 bg-light" id="services">
        <div class="container py-5">
            <h1 class="text-center pb-5"> Skills. </h1>
            <div class="row pb-3">
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-down-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-desktop"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Web design </h4>
                            <p> Abble to use VSC and any other web design's related app to fulfilled your desire
                                website
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-down" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-language"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Effective Communication</h4>
                            <p> Easily understand spoken and written information, listen to others, ask question
                                regularly, and abble to speak clearly in both Bahasa and English to build an effective
                                internal and external communications to enhance organization's needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-down-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-pencil-alt"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Copywriting </h4>
                            <p> Can make a good and valuable draft content for mass media or company website </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-up-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-users"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Welfare</h4>
                            <p> Build fantastic, comforting, and warm atmosphere in community. Ensuring people in
                                community to be
                                heard, feel safe and secure, moreover to live a happy life</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-tasks"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Project Management </h4>
                            <p> Makes a well management project in any individual or team-oriented project in terms of
                                good time
                                quality, well-prepared rundown,
                                fix schedule, and create a clear output</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3" data-aos="fade-up-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-heart"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2"> Costumer Support </h4>
                            <p> Using self-ability properly to provide good service and advice to society. Accept any
                                feedback to enhance a better organization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- past experience -->
    <section class="portfolio py-5" id="portfolio">
        <div class="container py-5 text-center">
            <h1 class="text-center pb-5"> Past Experience.</h1>
            <div class="row pb-3">
                <div class="col-lg-4 mb-3 mx-auto">
                    <div class="card" data-aos="flip-right" data-aos-duration="1000">
                        <img src="ieee.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><small> Liason Officer </small></h5>
                            <p> 2023 - present</p>
                            <p class="card-text"> Currently i am working as a liason officer on IEEE 23 BIG
                                Event held by ITS IEEE Student Branch</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 weeks ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mx-auto">
                    <div class="card" data-aos="flip-right" data-aos-duration="1000">
                        <img src="BaSIC.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><small> BaSIC Journal Event</small></h5>
                            <p>2023</p>
                            <p class="card-text"> Former member of journal project on BaSIC Journal Event with couple
                                of lecturer</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 2 month ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mx-auto">
                    <div class="card" data-aos="flip-right" data-aos-duration="1000">
                        <img src="icitisee.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><small> ICITISEE Journal Event</small></h5>
                            <p>2022</p>
                            <p class="card-text"> Former member of journal project on ICITISEE Journal Event with couple
                                of lecturer</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 5 months ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- my facts -->
    <section class="facts py-5 bg-light" id="facts">
        <div class="container text-center py-5">
            <h1 class="text-center pb-5"> My Facts. </h1>
            <div class="accordion" id="accordionPanelsStayOpenExample" data-aos="zoom-in" data-aos-duration="1000">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Communication is a key of my life
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <strong>Everyone need to communicate. </strong> We do live as someone who can't live in our
                            own. We need someone else to help us living our life. And communication is the key. Humans
                            have lots of ideas and of course they are different. Every individual has their own
                            feelings, and sometimes it is difficult for individuals to express them. Here I am, being a
                            communication specialist who likes to have an effective relationship with people by using a
                            good communication skills.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            People labeled me as a cheerful person
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>I am a cheerful person. </strong> I'd say that yes, i am a cheerful person. I smile
                            a
                            lot, i laugh over small things, and i enjoy talking with people. I rarely show my 'other
                            side' where i think that it's not necessary. I like to approach people in my free time.
                            Asking them to hangout or do something fun! I'm not very good at handling my emotion but i
                            do have the ambition to always take over my emotion so i won't be mad over something.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            My MBTI is ESFP
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>My MBTI is ESFP.</strong> My first MBTI was INFP, yes! It's 'I' which stands for
                            introvert. I live with INFP MBTI label for around 3 years and i felt like it fits me really
                            well. But, when i got into University life, i felt like my life has changed. I became more
                            friendly-er and gaining lots of new friends. That leads me to the point where 'i should
                            check my MBTI as soon as possible'. And i did, SHOCK! My MBTI changed into ESFP, didn't
                            expect myself to be someone who's labeled as an extrovert. But here i am, living my best
                            life enjoying making a good valueable relationship with people.
                        </div>
                    </div>
                </div>
            </div>
        </div>>
    </section>

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <h1 class="text-center"> Contact Me. </h1>
            <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                    <div class="row text-center">
                        <div class="col-lg-4" data-aos="zoom-in-down" data-aos-duration="1000">
                            <div class="circle">
                                <span><i class="fas fa-inbox"></i></span>
                            </div>
                            <h5> Instagram </h5>
                            <p> My life and self profile are in here. Go check it out!</p>
                            <a href="https://instagram.com/shevaaav?igshid=MzRlODBiNWFlZA==">Click here!</a>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in-down" data-aos-duration="1000">
                            <div class="circle">
                                <span><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <h5> Line </h5>
                            <p> You can have more freedom here, ask me any question and i'll gladly welcoming all of it.
                                Someone who has an intense of hiring me, you got the first line!</p>
                            <a href="https://line.me/ti/p/shevliaa">Click here!</a>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in-down" data-aos-duration="1000">
                            <div class="circle">
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                            <h5> WhatsApp </h5>
                            <p> Urgent only! If you still didn't receive an answer in a possible 3 work days, please do
                                text me through here</p>
                            <a href="https://wa.me/qr/7BADDEYVV43WA1">Click here!</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- form validation -->
            <div class="row">
                <h3 class="text-center"><small>Kindly leave any trace if you have question in mind!</small></h3>
                <p class="text-center"> Don't worry, your data is save and secured</p>
                <div class="col-lg-9 mx-auto">
                    <form action="submitPage.jpg" onsubmit="return validateForm() ;">
                        <div class="form-group">
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text">Name</span>
                                    <input id="nama" type="text" aria-label="First name" class="form-control">
                                </div>
                                <br>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">@</span>
                                    <input id="username" type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-text">Message</span>
                                    <textarea id="pesan" type="text" cols="30" rows="5" class="form-control bg light"
                                        aria-label="Textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn3 my-4"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="py-5 text-center">
        <p> copyright </p>
    </footer>

    <script src="https//unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
