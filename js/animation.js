let emptyElement = document.querySelector(".queue .queue-sound");
let titleElement = document.querySelector(".queue .queue-invitation");
// let serviceElements = document.querySelectorAll(".service");
// let figureElements = document.querySelectorAll(".service figure");

window.addEventListener('mousemove', handleMouseMove);

function handleMouseMove(event) {
    emptyElement.style.flexBasis = event.clientX + "px";
    titleElement.style.flexBasis = event.clientY / 2 + "px";

    figureElements.forEach(function (element) {
        element.style.flexBasis = (window.innerWidth - event.clientX) + "px";
    });
}



// mobile menu
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});