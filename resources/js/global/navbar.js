window.onscroll = function () {
    add_sticky();
};

const navbar = document.getElementById("navbar");
const aboutMe = document.getElementById("about-me");

function add_sticky() {

    if (window.pageYOffset >= aboutMe.offsetTop - navbar.offsetTop) {
        navbar.classList.add("sticky-top");
    } else {
        navbar.classList.remove("sticky-top");
    }
}
