// Replace this with the actual URL to the 'player_card.php' script
const playerCardURL = 'matchstats-db.php';

// Fetch the player card information
async function fetchPlayerCard(player_id) {
    const response = await fetch(`${playerCardURL}?Pid=${Pid}`);
    return await response.text();
}

// Create a new card for each player and display it on the page
function displayPlayerCard(Pid) {
    fetchPlayerCard(Pid).then(cardHTML => {
        const cardContainer = document.getElementById('card-container');
        cardContainer.innerHTML += cardHTML;
    });
}
