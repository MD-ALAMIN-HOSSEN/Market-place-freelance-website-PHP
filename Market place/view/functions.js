function fetchData(callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../controller/getJobsJson.php', true);
    //console.log('loded');
    xhr.onload = function() {
        //console.log('loded');
        // Code to handle successful response
        if (xhr.status >= 200 && xhr.status < 300) {
            // Request was successful
            var responseData = JSON.parse(xhr.responseText);
            //console.log('Response:', responseData);
            callback(responseData);
        } else {
            // Request failed
            console.error('Request failed with status:', xhr.status);
        }
    };
    xhr.send();

}

function processData(data) {
    // render the cards here
    console.log(data);
    // Select the container where the cards will be appended
    var container = document.getElementById('card-container');

    // Clear the container before appending new cards
    container.innerHTML = '';

    // Iterate over the array of objects
    data.forEach(function(item) {
        // Create a new card element
        var card = document.createElement('div');
        card.classList.add('card');

        // Create elements for job details and populate them with data
        var title = document.createElement('h2');
        title.textContent = item.Category;

        var price = document.createElement('p');
        price.textContent = 'Price: $' + item.Price;

        // Append job details to the card
        card.appendChild(title);
        card.appendChild(price);

        // Append the card to the container
        container.appendChild(card);
    });

}

function loadJobs() {
    // Call fetchData ajax
    fetchData(processData); //passing a call back funtion whice will render the cards for jobs fron json
}