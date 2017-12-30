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

    <script src="https://use.fontawesome.com/75a87d192f.js"></script>

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


</body>
</html>