const header = document.getElementById("header");
const navbar = header.querySelector(".navbar");
const burger = header.querySelector(".burger");


window.addEventListener("click", e => {
    if(e.target.classList.contains("burger")) {
        navbar.classList.toggle("active");
    }

    if(!e.target.closest("#header")) {
        navbar.classList.remove("active");
    }
})