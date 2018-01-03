<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--TYPOGRAPHIES-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
    
    <!--FONTAESOME-->
    <script src="https://use.fontawesome.com/75a87d192f.js"></script>
    
    <!--FAVICON-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/pictures/favicon.ico" />

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/produit.css">
    <link rel="stylesheet" href="assets/css/recherche.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Amazon</title>
</head>
<body>

<?php
require('views/header.php');

    if (!isset($_GET['page'])) {
        $page = '';
    } else {
        $page = $_GET['page'];
    }

    if ($page == '') {
        require('views/home.php');
    }

    if ($page == 'home') {
        require('views/home.php');
    }

    if ($page == 'recherche') {
        require('views/recherche.php');
    }

    if ($page == 'produit') {
        require('views/produit.php');
    }


require('views/footer.php');
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
<script src="assets/js/cookie.js"></script>
<script src="assets/js/main.js"></script>

<?php
    if ($page == '') {
        echo('<script src="assets/js/home.js"></script>');
    }

    if ($page == 'home') {
        echo('<script src="assets/js/home.js"></script>');
    }
    
    if ($page == 'recherche') {
        echo('<script src="assets/js/recherche.js"></script>');
    }

    if ($page == 'produit') {
        echo('<script src="assets/js/produit.js"></script>');
    }

   
?>


</body>
</html>