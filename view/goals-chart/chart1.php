const ctx = document.getElementById('chart-goal').getContext('2d');
const chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Player 1', 'Player 2', 'Player 3', 'Player 4', 'Player 5'],
        datasets: [{
            label: 'Goals',
            data: [10, 20, 15, 30, 45],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
