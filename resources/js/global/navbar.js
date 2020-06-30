const navbar = document.getElementById("navbar");
const aboutMe = document.getElementById("about-me");

window.onload = function () {

    if (aboutMe != null) {
        navbar.classList.add("sticky-top");
    } else {
        navbar.classList.add("fixed-top");
    }

    if (responsiveNavbar()) {
        window.addEventListener('resize', function () {
            responsiveNavbar();
        });
    }
};

function responsiveNavbar() {
    if (document.getElementsByClassName("nav-item").length >= 1) {

        if (window.innerWidth < 760) {
            Array.from(document.getElementsByClassName("navbar-brand")).forEach(
                element => element.setAttribute("style", "display: none")
            );
        } else {
            Array.from(document.getElementsByClassName("navbar-brand")).forEach(
                element => element.setAttribute("style", "display: visible")
            );
        }

        return true;
    } else if (document.getElementsByClassName("nav-item").length === 0) {
        Array.from(document.getElementsByClassName("navbar-brand")).forEach(
            element => element.style.margin = "0"
        );
    }

    return false;
}
