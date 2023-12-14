let emptyElement = document.querySelector(".queue .queue-sound");
let titleElement = document.querySelector(".queue .queue-invitation");

// Created a variable to store all the figure elements
let queueContainer = document.querySelector('.queue');

// -- Bug fixed: window.addEventListener > queueContainer.addEventListener --
queueContainer.addEventListener('mousemove', handleMouseMove);

function handleMouseMove(event) {
    // Calculate the flex-basis values based on the mouse position within the container
    let rect = queueContainer.getBoundingClientRect();
    let x = event.clientX - rect.left; // x position within the container
    let y = event.clientY - rect.top;  // y position within the container

    emptyElement.style.flexBasis = x + "px";
    titleElement.style.flexBasis = y / 2 + "px";
}