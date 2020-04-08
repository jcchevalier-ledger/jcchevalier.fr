const navbar = document.getElementById("navbar");
const aboutMe = document.getElementById("about-me");

window.onload = function () {

    if (aboutMe != null) {
        navbar.classList.add("sticky-top");
    } else {
        navbar.classList.add("fixed-top");
    }

    if ((document.getElementsByClassName("nav-item").length >= 1) && (window.innerWidth < 760)) {
        Array.from(document.getElementsByClassName("navbar-brand")).forEach(
            element => element.style.display = "none"
        )
    }
};
