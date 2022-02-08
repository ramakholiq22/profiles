<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Ramadlon Nur Kholiq</title>
    <link rel="shortcut icon" href="frontend/images/">
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link rel="stylesheet" href="frontend/libraries/retina/retina.js">
    <link rel="stylesheet" href="frontend/libraries/fontawesome/css/all.css">

    <!-- lib untuk slider brand (client) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- end lib untuk slider brand (client) -->
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark" id="navbar" style="background-color: #000080 !important;">
        <a class="navbar-brand" href="index.php">Ramadlon Nur Kholiq</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#header">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#exp">Expertise</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header id="header" class="py-5 mb-5 text-white text-center">
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col-lg-6 col-12 text-center">
                    <h1>
                        Hello, I'am
                    </h1>
                    <p>
                        Ramadlon Nur Kholiq
                        <br>
                        Fullstack Developer
                    </p>
                    <a class="btn" href="#project">Let's have a coffee</a>
                </div>

                <div class="col-lg-6 col-12">
                    <img src="frontend/images/foto-rama.png" alt="foto-rama" class="float-left img-fluid justify-content-center">
                </div>
            </div>
        </div>
    </header>

    <section id="exp">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Expertise</h2>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <i class="fas fa-pencil-alt"></i>
                            <h5>Designer</h5>
                            <p>I create design simple and beautiful Apps</p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <i class="fas fa-code" ></i>
                            <h5>Developer</h5>
                            <p>I like code and enjoy bringing ideas</p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <i class="fas fa-robot"></i>
                            <h5>Robotic</h5>
                            <p>I build hardware to make work people simple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Services</h2>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <i class="fas fa-gamepad"></i>
                            <h5>Game</h5>
                            <p>Make your own Game</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <i class="fas fa-code"></i>
                            <h5>Website</h5>
                            <p>Make your own Website</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <i class="fas fa-mobile"></i>
                            <h5>Mobile Apps</h5>
                            <p>Make your own apps <br> ios / android</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <i class="fas fa-project-diagram"></i>
                            <h5>Cross Platform Apps</h5>
                            <p>Make your own apps <br> can run every whare</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clinet">
        <div class="brands">
            <div class="container">
                <h3 class="text-center mb-3">My Client</h3>
                <div class="row">
                    <div class="col">
                        <div class="brands_slider_container">
                            <div class="owl-carousel owl-theme brands_slider">
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="frontend/images/kc.png" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="frontend/images/pgk.png" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="frontend/images/tn.png" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="frontend/images/get_x.png" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="frontend/images/archery.png" alt=""></div>
                                </div>
                                
                            </div> <!-- Brands Slider Navigation -->
                            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4>Start a project</h4>
                            <hr>
                            <p>Interested in working together and discuss a project?<br> Let's Have a Coffee!</p>
                            <div id="mailbox">
                                <form action="#" method="POST" onsubmit="validasiEmail();">
                                    <div class="row pt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 text-right">
                                        <div class="col-12">
                                            <button class="btn btn-success">Send Email</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="mt-5 p-5 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-12">
                    <p style="font-size: 20px;">Living, learning & leveling up<br>one day at a time</p>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h3>Office</h3>
                            <ul class="list-unstyled sitemap">
                                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=+6281380322145&text=Hallo%20Saya%20ingin%20bekerjasama%20dengan%20Rama."><i class="fab fa-whatsapp"></i> 081380322145</a></li>
                                <li><i class="fa fa-envelope"></i> ramadlonnurkholiq@gmail.com</li>
                                <li><i class="fa fa-map"></i> Jl. Sampora Rt 04 Rw 04 No. 49 <br> Kabupaten Bogor, Indonesia</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-12">
                            <h3>Social Media</h3>
                            <ul class="list-unstyled sitemap">
                                <li><a href="https://www.instagram.com/rama_kholiq"><i class="fab fa-instagram"></i> Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 text-center">
                <div class="col-lg-12 col-12">
                    <p> &copy; 2019 <?php $thn = date('Y'); if($thn == 2019){echo "";}else{echo "- $thn";}; ?> Ramadlon Nur Kholiq  • All rights reserved • Love From Kabupaten Bogor</p>
                </div>
            </div>
        </div>
    </footer>

<!-- JS untuk bootstrap-->
<script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="frontend/scripts/main.js"></script>
<!-- JS untuk slide brand logo (client)-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<!-- End JS untuk slide brand logo (client)-->
</body>
</html>
