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
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <title>Amazon</title>
</head>
<body>
<?php
require("../header.php");
?>
<section class="d-flex justify-content-center align-items-center flex-column p-5 background-img-home vh100">
    <div class="ctn-search">
        <div class="input-group shadow">
            <input type="text" class="form-control" placeholder="Votre recherche..." aria-label="Search for...">
            <span class="input-group-btn">
                <button onclick="javascript:location.href='/DEV ANNEE2/Amazon/views/recherche.php'"
                        class="btn btn-secondary btn-search" type="button"><i class="fa fa-search"></i></button>
            
        </div>
    </div>
</section>
<section class="p-5 container">
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="recherche.php">Liste Produit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nom du Produit</li>
        </ol>
    </nav>
    <section class="row">
        <article class="col-md-5">
            <img class="img-produit" src="../assets/pictures/apareil-photo.jpg" alt="Description image">
        </article>
        <article class="col-md-7">
            <h2 class="mb-3">Titre Produit</h2>
            <div class="d-flex align-items-center mb-2">
                <div class="mr-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <a href="#">Voir les commentaires clients (224)</a>
            </div>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores beatae consequuntur deserunt dolores
                ex facere harum hic inventore nisi non pariatur quia quibusdam quod sed sint suscipit totam,
                voluptatibus.Architecto commodi consectetur corporis cupiditate debitis eius, esse id maiores, maxime
                non omnis perspiciatis praesentium quasi quibusdam repellat, sequi vero. Aut expedita hic inventore
                laborum magni neque praesentium tempore vel?Aliquam, aut autem corporis dicta dolor dolorem dolores
                dolorum ducimus earum eveniet id, ipsa ipsam iure laborum maiores nam nobis perspiciatis quas, quia
                quibusdam repellat repudiandae saepe tenetur ut vitae!Alias aspernatur aut deleniti optio?</p>
            <div class="row">
                <h3 class="col-md-5">EUR 1300€</h3>
                <div class="col-md-7 form-control d-flex flex-column">
                    <form class="d-flex align-items-center mb-3">
                        <label class="m-0 w-25" for="exampleFormControlSelect1">Qte :</label>
                        <select class="form-control w-50" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                        </select>
                        <button class="btn btn-primary ml-3">Ajout au panier</button>
                    </form>
                    <p class="text-right livraison m-0">Livraison gratuite dès EUR 25 d'achats<br> en France
                        métropolitaine.
                        Tous les prix incluent la TVA.</p>
                </div>
            </div>

        </article>
    </section>
</section>

<?php
require("../footer.php");
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
<script src="../assets/js/cookie.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/produit.js"></script>

</body>
</html>