const services = {
    'Decorator': 'bookdecorator/index.html',
    'TV Repair': 'bookelectrician/index.html',
    'AC Repair': 'bookelectrician/index.html',
    'Babysitter': 'bookbabysitter/babysitter.html',
    'Cook': 'bookcook/index.html',
    'Driver': 'bookdriver/index.html',
    'Electrician': 'bookelectrician/index.html'
};

const searchInput = document.getElementById('search-input');
const suggestionsBox = document.getElementById('suggestions');
let selectedIndex = -1; // To track the index of the selected suggestion

// Function to show filtered suggestions
function showFilteredSuggestions(query) {
    suggestionsBox.innerHTML = '';
    const filteredServices = Object.keys(services).filter(service => 
        service.toLowerCase().includes(query.toLowerCase())
    );

    filteredServices.forEach((service, index) => {
        const suggestionItem = document.createElement('div');
        suggestionItem.classList.add('suggestion-item');
        suggestionItem.textContent = service;
        suggestionItem.addEventListener('click', function() {
            searchInput.value = service;
            window.location.href = services[service];
        });

        // Highlight the selected suggestion
        if (index === selectedIndex) {
            suggestionItem.classList.add('selected');
        }

        suggestionsBox.appendChild(suggestionItem);
    });

    suggestionsBox.style.display = filteredServices.length ? 'block' : 'none';
}

// Handle input events for filtering and autocomplete
searchInput.addEventListener('input', function() {
    selectedIndex = -1;
    const query = this.value;
    showFilteredSuggestions(query);
});

// Handle keyboard navigation
searchInput.addEventListener('keydown', function(e) {
    const items = document.querySelectorAll('.suggestion-item');

    if (e.key === 'ArrowDown') {
        selectedIndex = (selectedIndex + 1) % items.length;
        showFilteredSuggestions(this.value);
    } else if (e.key === 'ArrowUp') {
        selectedIndex = (selectedIndex - 1 + items.length) % items.length;
        showFilteredSuggestions(this.value);
    } else if (e.key === 'Enter' && selectedIndex > -1) {
        e.preventDefault();
        items[selectedIndex].click();
    }
});

// Show suggestions when clicking on the input
searchInput.addEventListener('focus', function() {
    showFilteredSuggestions(this.value);
});

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    if (!searchInput.contains(event.target) && !suggestionsBox.contains(event.target)) {
        suggestionsBox.style.display = 'none';
    }
});
