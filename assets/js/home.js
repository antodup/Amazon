// RESPONSIVE
var parentCards = document.querySelectorAll(".parent-card"),
    cardsCarsouel1 = document.querySelectorAll("#section-item .card"),
    cardsCarsouel2 = document.querySelectorAll("#section-item2 .card");

if (document.documentElement.clientWidth >= 320 && document.documentElement.clientWidth <= 767) {
    //CAROUSEL RESPONSIVE
    //CAROUSEL 1
    for (var i = 0; i < cardsCarsouel1.length; i++) {
        document.querySelector("#section-item").appendChild(cardsCarsouel1[i])
        cardsCarsouel1[i].classList.add("carousel-item")
        cardsCarsouel1[i].classList.add("m-3")
        cardsCarsouel1[0].classList.add("active")
    }

    //CAROUSEL 2
    for (var i = 0; i < cardsCarsouel2.length; i++) {
        document.querySelector("#section-item2").appendChild(cardsCarsouel2[i])
        cardsCarsouel2[i].classList.add("carousel-item")
        cardsCarsouel2[i].classList.add("m-3")
        cardsCarsouel2[0].classList.add("active")
    }

    for (var i = 0; i < parentCards.length; i++) {
        parentCards[i].classList.remove("carousel-item")
        parentCards[i].classList.remove("active")
        parentCards[i].style.display = "none"
    }

}


