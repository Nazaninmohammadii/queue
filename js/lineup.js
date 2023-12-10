// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    // Fetch the artist data from the JSON file
    fetch('lineup-content/data/lineUpData.JSON')
        .then(response => response.json()) // Parse the JSON from the response
        .then(artists => { // Use the parsed JSON (artist data) 
            // Select all the buttons in the lineup container
            const lineupButtons = document.querySelectorAll('.lineup-container button');

            // Add a click event listener to each button
            lineupButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Log the clicked button
                    console.log('Button clicked:', this);
                    // Get the artist ID from the button's data attribute
                    const artistId = this.dataset.artistId;
                    // Find the artist with the matching ID
                    const artist = artists.find(a => a.id == artistId);
                    if (artist) {
                        // If the artist was found, log it and show the lightbox
                        console.log('Artist found:', artist);
                        showLightbox(artist);
                    } else {
                        // If the artist was not found, log an error
                        console.error('Artist not found for ID:', artistId);
                    }
                });
            });
            
        })
        .catch(error => console.error('Error loading artist data:', error)); // Log any errors that occurred while fetching the data
});

// Function to show the lightbox with the artist's details
function showLightbox(artist) {
    // Create a new div for the lightbox
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    // Set the inner HTML of the lightbox
    lightbox.innerHTML = `
        <div class="lightbox-card">
            <img src="${artist.image}" alt="${artist.name}">
            <h3>${artist.name}</h3>
            <p class="artist-location">${artist.location}</p>
            <p class="artist-genre">${artist.genre}</p>
            <p>${artist.description}</p>
            <button onclick="this.parentElement.parentElement.remove()">Close</button>
        </div>
    `;
    // Append the lightbox to the body
    document.body.appendChild(lightbox);

    // Add a click event listener to the lightbox to remove it when clicked
    lightbox.addEventListener('click', function() {
        this.remove();
    });

    // Select the lightbox card
    const lightboxCard = lightbox.querySelector('.lightbox-card');
    // Add a click event listener to the lightbox card to stop the event propagation
    lightboxCard.addEventListener('click', function(event) {
        event.stopPropagation();
    });
}