// Initialize Chart.js
Chart.defaults.global.responsive = true;

// Create a new chart instance for each chart
var ctx1 = document.getElementById('chart1-canvas').getContext('2d');
var myChart1 = new Chart(ctx1, {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 1',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [65, 59, 84, 70, 55]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Chart 1'
    }
  }
});

var ctx2 = document.getElementById('chart2-canvas').getContext('2d');
var myChart2 = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 2',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [40, 20, 30, 50, 60]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Chart 2'
    }
  }
});

var ctx3 = document.getElementById('chart3-canvas').getContext('2d');
var myChart3 = new Chart(ctx3, {
  type: 'radar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 3',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [80, 90, 70, 60, 50]
    }]
 },
 options: {
    title: {
      display: true,
      text: 'Chart 3'
    }
 }
});
