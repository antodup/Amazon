<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--TYPOGRAPHIES-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">

    <script src="https://use.fontawesome.com/75a87d192f.js"></script>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Amazon</title>
</head>
<body>
<?php
include("views/header.php")
?>
<section class="d-flex justify-content-center align-items-center flex-column p-3 background-img-home vh100">
    <div class="ctn-search">
        <div class="text-white text-center mb-4">
            <h1>Qu'allez-vous acheter aujourd'hui ?</h1>
        </div>
        <div class="input-group shadow">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary btn-search" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
</section>
<section class="container p-5 bg-white ctn-carousel">
    <article>
        <h4>Sélection idées cadeau</h4>
    </article>
    <section id="carouselExampleControls" class="pt-3 carousel slide" data-ride="carousel">
        <section class="carousel-inner">
            <section class="carousel-item active">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column"
                        src="..." alt="First slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
            <section class="carousel-item">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column"
                        src="..." alt="Second slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
            <section class="carousel-item">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column-reverse"
                        src="..." alt="Third slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
        </section>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
</section>
<section class="background-img-add1 d-flex justify-content-end pb-5 pt-5">
    <article class="col-sm-5 mt-5 mb-5 text-white">
        <h2>Votre commande <br> en quelques clics</h2>
    </article>
</section>
<section class="container p-5 bg-white ctn-carousel">
    <article>
        <h4>Sélection idées cadeau</h4>
    </article>
    <section id="carouselExampleControls" class="pt-3 carousel slide" data-ride="carousel">
        <section class="carousel-inner">
            <section class="carousel-item active">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column"
                        src="..." alt="First slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
            <section class="carousel-item">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column"
                        src="..." alt="Second slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
            <section class="carousel-item">
                <section
                        class="d-block w-100 d-flex align-items-baseline justify-content-sm-between flex-sm-row flex-sm-nowrap flex-column-reverse"
                        src="..." alt="Third slide">
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/drone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/ipad-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                    <article class="card" style="width: 20rem;">
                        <img class="card-img-top" src="assets/pictures/go-pro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"><h5 class="card-title">Drone kappa 1337</h5><h6>
                                    EUR 1337.99</h6></div>
                            <a href="#" class="btn btn-primary">j'achète</a>
                        </div>
                    </article>
                </section>
            </section>
        </section>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
</section>
<section class="d-flex p-3 justify-content-sm-between flex-sm-row flex-column">
    <article class="col-sm-6 mt-2">
        <img src="assets/pictures/add1.jpg" alt="promotions de noël" class="w-100">
    </article>
    <article class="col-sm-6 mt-2">
        <img src="assets/pictures/add2.jpg" alt="Produits comme neufs" class="w-100">
    </article>
</section>
<?php
include("views/footer.php")
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>

</body>
</html>