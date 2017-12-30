var click = 0;
document.querySelector(".button-avis").addEventListener("click", function () {
    if (click == 0){
        document.querySelector(".button-avis span i").classList.remove("fa-chevron-right")
        document.querySelector(".button-avis span i").classList.add("fa-chevron-down")
        click = 1
    } else if (click == 1) {
        document.querySelector(".button-avis span i").classList.remove("fa-chevron-down")
        document.querySelector(".button-avis span i").classList.add("fa-chevron-right")
        click = 0
    }
})

// RESPONSIVE
var parentCards = document.querySelectorAll(".parent-card"),
    cardsCarsouel1 = document.querySelectorAll("#section-item .card");

if (document.documentElement.clientWidth >= 320 && document.documentElement.clientWidth <= 767) {
    //CAROUSEL RESPONSIVE
    //CAROUSEL 1
    for (var i = 0; i < cardsCarsouel1.length; i++) {
        document.querySelector("#section-item").appendChild(cardsCarsouel1[i])
        cardsCarsouel1[i].classList.add("carousel-item")
        cardsCarsouel1[i].classList.add("m-3")
        cardsCarsouel1[0].classList.add("active")
    }

    for (var i = 0; i < parentCards.length; i++) {
        parentCards[i].classList.remove("carousel-item")
        parentCards[i].classList.remove("active")
        parentCards[i].style.display = "none"
    }

}