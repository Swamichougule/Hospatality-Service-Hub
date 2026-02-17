// Function to get URL parameters
function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Get the tasker's name from the URL
let taskerName = getQueryParam('name');

// Update the page with the tasker's name
if (taskerName) {
    document.querySelector('.tasker-name').textContent = taskerName + "'s Availability";
} else {
    document.querySelector('.tasker-name').textContent = "Tasker's Availability"; // Fallback
}
