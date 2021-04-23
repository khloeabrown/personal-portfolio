window.onscroll = function() { stickyFunc(); };
var header = document.getElementById("header__navigation");
var sticky = header.offsetTop;

function stickyFunc() {
    if (window.pageYOffset >= 1) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}