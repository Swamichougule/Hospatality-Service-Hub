const maids = [
    { id: 1, name: "Kanika N", price: 100, img: "images/maid1.png" },
    { id: 2, name: "Neha S", price: 250, img: "images/maid2.png" },
    { id: 3, name: "Aruhi H", price: 80, img: "images/maid3.png" },
    { id: 4, name: "Rahul S", price: 99, img: "images/maid4.png" },                               
    { id: 5, name: "Gitanjali", price: 120, img: "images/maid5.png" }
];

// Function to display maid profiles
function displayMaids(maids) {
    const maidList = document.getElementById('maidList');
    maidList.innerHTML = ''; // Clear existing maids

    maids.forEach(maid => {
        const maidCard = document.createElement('div');
        maidCard.className = 'maid-card';
        maidCard.innerHTML = `
            <img src="${maid.img}" alt="${maid.name}">
            <h3>${maid.name}</h3>
            <p>Price: ₹${maid.price.toFixed(2)}/hr</p>
            <button>Select & Continue</button>
        `;
        maidList.appendChild(maidCard);
    });
}

// Initial display of all maids
displayMaids(maids);

// Function to update the price label
function updatePriceLabel(value) {
    document.getElementById('priceLabel').innerText = `₹${value}`;
}

// Function to filter maids by price range
function filterMaids() {
    const maxPrice = document.getElementById('priceRange').value;
    const filteredMaids = maids.filter(maid => maid.price <= maxPrice);
    displayMaids(filteredMaids);
}
