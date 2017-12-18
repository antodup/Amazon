

//RECUPERE LE COOKIE
var cookieSearch = getCookie("Recherche")
console.log(cookieSearch)
document.querySelector(".result").innerHTML = "<h6>résultats pour " + "<i>" + cookieSearch + "</i>" + "</h6>"
eraseCookie("Recherche")