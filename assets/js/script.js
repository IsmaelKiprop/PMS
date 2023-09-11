// Function to generate random data for the chart
function generateRandomData() {
    var data = [];
    for (var i = 0; i < 6; i++) {
        data.push(Math.floor(Math.random() * 2000));
    }
    return data;
}

// Function to update chart with new data (e.g., on button click)
function updateChart() {
    var ctx = document.getElementById('eggProductionChart').getContext('2d');
    var eggProductionChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Egg Production',
                data: generateRandomData(), // Initial random data
                borderColor: 'blue',
                borderWidth: 2,
                fill: false
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
}

// Add an event listener to the button to trigger chart update
document.addEventListener('DOMContentLoaded', function() {
    var updateButton = document.getElementById('updateChartButton');
    updateButton.addEventListener('click', updateChart);
});

// chart.js

// Include Chart.js library (make sure you've already included it in your HTML)
// Example: <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

// Sample sales data (you can fetch this data from your database)
const salesData = {
    labels: ["Product 1", "Product 2", "Product 3", "Product 4"],
    datasets: [
        {
            label: "Total Sales",
            backgroundColor: "rgba(75, 192, 192, 0.2)", // Chart background color
            borderColor: "rgba(75, 192, 192, 1)", // Border color
            borderWidth: 1,
            data: [500, 800, 600, 1200], // Replace with your actual sales data
        },
    ],
};

// Chart configuration
const chartConfig = {
    type: "bar", // Bar chart
    data: salesData, // Data to display
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
};

// Create a chart instance and attach it to a canvas element with the ID 'salesChart'
const ctx = document.getElementById("salesChart").getContext("2d");
const myChart = new Chart(ctx, chartConfig);
