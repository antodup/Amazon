//RECUPERE LE COOKIE
var cookieSearch = getCookie("Recherche")
console.log(cookieSearch)
document.querySelector(".result").innerHTML = "<h6>résultats pour " + "<i>" + cookieSearch + "</i>" + "</h6>"
eraseCookie("Recherche")

// RESPONSIVE
var parentCards = document.querySelectorAll(".parent-card"),
    cardsCarsouel1 = document.querySelectorAll("#section-item-search .card");

if (document.documentElement.clientWidth >= 320 && document.documentElement.clientWidth <= 767) {
    //CAROUSEL RESPONSIVE
    //CAROUSEL 1
    for (var i = 0; i < cardsCarsouel1.length; i++) {
        document.querySelector("#section-item-search").appendChild(cardsCarsouel1[i])
        cardsCarsouel1[i].classList.add("carousel-item")
        cardsCarsouel1[0].classList.add("active")
    }


    for (var i = 0; i < parentCards.length; i++) {
        parentCards[i].classList.remove("carousel-item")
        parentCards[i].classList.remove("active")
        parentCards[i].style.display = "none"
    }

}