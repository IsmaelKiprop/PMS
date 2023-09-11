// chart.js

// Get a reference to the canvas element
var ctx = document.getElementById('myLineChart').getContext('2d');

// Define your data
var data = {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
        label: 'Monthly Sales',
        data: [10, 25, 18, 32, 28],
        borderColor: 'rgba(75, 192, 192, 1)', // Line color
        borderWidth: 2, // Line width
        fill: false // To make it a line chart without filling the area under the line
    }]
};

// Define chart configuration options
var options = {
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

// Create the chart
var myLineChart = new Chart(ctx, {
    type: 'line', // Specify the chart type
    data: data, // Pass the data object
    options: options // Pass the options object
});
