// RESPONSIVE
if (document.documentElement.clientWidth >= 320 && document.documentElement.clientWidth <= 1024) {
    document.querySelector(".navbar-brand:first-child").innerHTML = "<i class=\"mb-1 mr-2 fa fa-user\" aria-hidden=\"true\"></i>"
    document.querySelector(".navbar-brand:last-child").innerHTML = "<i class=\"mb-1 mr-2 fa fa-shopping-cart\" aria-hidden=\"true\"></i>"
}

//RECHERCHE => COOKIE
document.querySelector(".btn-search").addEventListener("click", function () {
    var inputVal = document.querySelector(".form-control").value
    console.log(inputVal)
    setCookie("Recherche", inputVal, 30);
})


// POPOVERS

$(function () {
    $('[data-toggle="popover"]').popover()
});

$("#profil").popover ({
    title : '<h3 class = "title-popover"> Profil </ h3>' ,
    content : '<ul><li class="li-popover"><a class="a-popover">Modifier mon profil</a></li><li class="li-popover"><a class="a-popover">Deconnexion</a></li></ul>' ,
    html : true
});

$("#panier").popover ({
    title : '<h3 class = "title-popover"> Panier </ h3>' ,
    // language=HTML
    content : '<ul><li class="li-popover d-flex justify-content-center align-items-center"><img class="img-popover" src="../assets/pictures/apareil-photo.jpg"><div class="d-flex flex-column"><p>Appareil photo</p> <p>200€</p></div></li><li class="li-popover d-flex justify-content-center align-items-center"><img class="img-popover" src="../assets/pictures/ipad-pro.jpg"><div class="d-flex flex-column"><p>Ipad pro</p> <p>800€</p></div></li></ul>' +
    '<li class="d-flex justify-content-center "><a href="#" class="btn btn-primary btn-popover">Voir mon panier</a></li>' ,
    html : true
});