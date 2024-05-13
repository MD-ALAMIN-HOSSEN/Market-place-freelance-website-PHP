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
//curnly not used only a templete 

function processData1(data) {
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


function processData(data) {
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

        // Left side of the card
        var cardLeft = document.createElement('div');
        cardLeft.classList.add('card-left');

        // Title and Date
        var spaceAroundLeft = document.createElement('div');
        spaceAroundLeft.classList.add('space-around');
        var title = document.createElement('div');
        title.classList.add('titel');
        title.textContent = item.Titel; // Assuming 'Titel' corresponds to the title
        var date = document.createElement('div');
        date.classList.add('date');
        var postDateTime = item.Post_dateTime;
        var dateOnly = postDateTime.split(' ')[0];
        date.textContent = 'Date: ' + dateOnly; // Assuming 'Date' corresponds to the date
        spaceAroundLeft.appendChild(title);
        spaceAroundLeft.appendChild(date);

        // Details and Skills
        var details = document.createElement('div');
        details.classList.add('details', 'space-around');
        details.textContent = item.Details; // Assuming 'Details' corresponds to the details
        var skills = document.createElement('div');
        skills.classList.add('skills', 'space-around');
        skills.textContent = 'Skill: ' + item.Skills; // Assuming 'Skills' corresponds to the skills

        // Append left side elements to the cardLeft
        cardLeft.appendChild(spaceAroundLeft);
        cardLeft.appendChild(details);
        cardLeft.appendChild(skills);

        // Right side of the card
        var cardRight = document.createElement('div');
        cardRight.classList.add('card-right');

        // Menu icon, Price, Status, and See more link
        var spaceAroundRight = document.createElement('div');
        spaceAroundRight.classList.add('space-around');
        var menuIcon = document.createElement('div');
        menuIcon.classList.add('menu-icon', 'space-around');
        // Assuming the image path is static
        //menuIcon.innerHTML = '<img src="../asset/menu.png" alt="">';
        var price = document.createElement('div');
        price.classList.add('price');
        price.textContent = 'Price: $' + item.Price;
        var status = document.createElement('div');
        status.classList.add('status', 'space-around');
        status.textContent = 'Status: ' + item.Status;
        //converting job to jesone to pass to the details page
        var jobData = JSON.stringify(item);
        var seeMoreLink = document.createElement('a');
        seeMoreLink.classList.add('button-link2', 'space-around');
        seeMoreLink.href = 'jobs_details.php?jobData=' + encodeURIComponent(jobData); // encoding jesone and passing to php file
        seeMoreLink.textContent = 'See more';

        // Append right side elements to the spaceAroundRight
        spaceAroundRight.appendChild(menuIcon);
        spaceAroundRight.appendChild(price);
        spaceAroundRight.appendChild(status);
        spaceAroundRight.appendChild(seeMoreLink);

        // Append spaceAroundRight to cardRight
        cardRight.appendChild(spaceAroundRight);

        // Append cardLeft and cardRight to the card
        card.appendChild(cardLeft);
        card.appendChild(cardRight);

        // Append the card to the container
        container.appendChild(card);
    });
}