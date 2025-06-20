// JS for Featured Section 

const boxes= document.querySelectorAll(".featured .featured-slider .box")
var counter=0

function left(){
    if (counter==0){
        counter=boxes.length / 3-1
    }else{
        counter--
    }
        scroll()

}

function right(){
    if (counter==boxes.length / 3-1){
        counter=0
    }else{
        counter++
    }
        scroll()
}

function scroll(){
    boxes.forEach(function(item){
                item.style.transform = `translateX(-${counter * 1250}px)`
    }) 
}





// JS for Filter Section

function handleClick(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Get the selected vehicle type
    const vehicleType = document.getElementById('vehicleType').value;

    // Call function to display filtered results
    displayResults(vehicleType);
}

function displayResults(vehicleType) {
    const resultsContainer = document.getElementById('results');

    // Clear previous results
    resultsContainer.innerHTML = '';

    // Simulated data - you can replace this with actual data fetched from a server
    const vehicles = [
        { type: 'car', name: 'Suzuki Alto', location: 'Colombo 2', price: 'Rs. 4000.00 / Day', img: 'alto - japan.png' },
        { type: 'car', name: 'Maruti Suzuki Alto', location: 'Mulleriya New Town', price: 'Rs. 3500.00 / Day', img: 'alto.png' },
        { type: 'car', name: 'toyota Aqua', location: 'Colombo 1', price: 'Rs. 5000.00 / Day', img: 'aqua.png' },
        { type: 'car', name: 'wagen R', location: 'Angoda', price: 'Rs. 5000.00 / Day', img: 'wagon r.png' },
        { type: 'bike', name: 'Yamaha fz', location: 'Colombo 3', price: 'Rs. 1,500.00 / Day', img: 'bike1.png' },
        { type: 'bike', name: 'Honda CBR', location: 'Gampaha', price: 'Rs. 3,000.00 / Day', img: 'bike2.png' },
        { type: 'bike', name: 'Bajaj Pulsar NS', location: 'Kandy', price: 'Rs. 1,500.00 / Day', img: 'bike3.png' },
        { type: 'bike', name: 'honda dio', location: 'Kurunagala', price: 'Rs. 900.00 / Day', img: 'bike4.png' },
    ];

    // Filter vehicles based on the selected vehicle type
    const filteredVehicles = vehicles.filter(vehicle => vehicle.type === vehicleType);

    // Display filtered results
    if (filteredVehicles.length > 0) {
        filteredVehicles.forEach(vehicle => {
            resultsContainer.innerHTML += `
                <div class="car-card">
                    <img src="${vehicle.img}" alt="${vehicle.name}">
                    <h3>${vehicle.name}</h3>
                    <p>${vehicle.location}</p>
                    <p class="price">${vehicle.price}</p>
                    <p class="available">AVAILABLE</p>
                    <a href="#" class="book-now">BOOK NOW</a>
                </div>
            `;
        });
    } else {
        resultsContainer.innerHTML = '<p>No vehicles found for the selected type.</p>';
    }
}