//IMG LOGO / FOOTER et HEADER
var imgLogo = document.querySelector(".logo").getAttribute("src")
document.querySelector(".logo").setAttribute("src", "../" + imgLogo)
document.querySelector(".logo_footer").setAttribute("src", "../" + imgLogo)

//RECUPERE LE COOKIE
var cookieSearch = getCookie("Recherche")
console.log(cookieSearch)
document.querySelector(".result").innerHTML = "<h6>résultats pour " + "<i>" + cookieSearch + "</i>" + "</h6>"
eraseCookie("Recherche")