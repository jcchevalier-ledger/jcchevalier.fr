const navbar = document.getElementById("navbar");
const aboutMe = document.getElementById("about-me");

window.onload = function () {
    if (aboutMe != null) {
        window.addEventListener('scroll', function () {
            add_sticky();
        });
    } else {
        navbar.classList.add("fixed-top");
    }
};


function add_sticky() {

    if (window.pageYOffset >= aboutMe.offsetTop - navbar.offsetTop) {
        navbar.classList.add("sticky-top");
    } else {
        navbar.classList.remove("sticky-top");
    }
}
