<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadlon Nur Kholiq</title>
    <link rel="stylesheet" href="frontend/libraries/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link rel="stylesheet" href="frontend/scripts/main.js">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="index.html">Rama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#exp">Expertise</a></li>
            </ul>
        </div>
        
    </nav>

    <header id="header" class="bg-primary py-5 mb-5 text-white text-center">
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-size: 50px;">
                        Hello, I'am
                    </h1>
                    <p style="font-size: 25px; font-weight: lighter;">
                    Ramadlon Nur Kholiq
                    <br>
                    Fullstack Developer
                    </p>
                    <a class="btn btn-success" href="#project">Let's have a coffee</a>
                </div>

                <div class="col">
                    <img src="frontend/images/foto-rama.png" alt="foto-rama">
                </div>
            </div>
        </div>
    </header>

    <section id="exp" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Expertise</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fa fa-pencil" style="font-size: 100px;"></i>
                            <h4>Designer</h4>
                            <p>I create design simple and beautiful</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-code" style="font-size: 100px;"></i>
                            <h4>Developer</h4>
                            <p>I like code and enjoy bringing ideas</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-gears" style="font-size: 100px;"></i>
                            <h4>Robotic</h4>
                            <p>I build hardware to make work people simple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4>Start a project</h4>
                            <hr>
                            <p>Interested in working together and discuss a project?<br> Let's Have a Coffee!</p>
                            <div id="mailbox">
                                <div class="row pt-3">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <input type="text" name="message" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 text-right">
                                    <div class="col-12">
                                        <button class="btn btn-success">Send Email</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="bg-dark mt-5 p-5 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-lg-11">
                    <div class="row">
                        <div class="col">
                            <p>Living, learning & leveling up<br>one day at a time</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h5>Office</h5>
                                    <ul class="list-unstyled sitemap">
                                        <li>123456789</li>
                                        <li>ramadlonnurkholiq@gmail.com</li>
                                        <li>Kabupaten Bogor, Indonesia</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <h5>Social Media</h5>
                                    <ul class="list-unstyled sitemap">
                                        <li><a href="instagram.com/rama_kholiq">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 text-center">
                <div class="col">
                    <p> &copy; 2019-2021 Ramadlon Nur Kholiq  • All rights reserved • Love From Kabupaten Bogor</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
</body>
</html>
