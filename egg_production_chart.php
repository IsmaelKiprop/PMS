<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egg Production Chart</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Include your main CSS file for styling -->

    <style>
        /* Additional CSS styles for this page */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Add more specific styles as needed for your content */
        .chart-description {
            font-weight: bold;
        }

        .section-title {
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .insights-list {
            list-style-type: disc;
            margin-left: 20px;
        }

        .insights-list li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .interpretation-text {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .update-text {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Egg Production Chart</h1>
        <p class="chart-description">This chart displays the egg production over a certain period. It provides insights into the quantity of eggs produced on different dates.</p>
        
        <!-- Include the canvas element for the chart -->
        <canvas id="eggProductionChart" width="400" height="200"></canvas>
        
        <h2 class="section-title">Key Insights:</h2>
        <ul class="insights-list">
            <li><strong>Seasonal Variations:</strong> The chart reveals seasonal variations in egg production. For instance, there's a noticeable increase in production during the spring and a decrease during winter months.</li>
            <li><strong>Production Trends:</strong> Over time, you can observe trends in egg production. It helps in identifying periods of higher productivity and potential areas for improvement.</li>
            <li><strong>Quality Control:</strong> Monitoring egg production is crucial for quality control. Sudden drops in production may indicate health or environmental issues that need attention.</li>
        </ul>
        
        <h2 class="section-title">Interpreting the Chart:</h2>
        <p class="interpretation-text">The x-axis represents dates, and the y-axis represents the total quantity of eggs produced. Each data point on the chart corresponds to a specific date and the number of eggs produced on that date.</p>
        
        <p class="interpretation-text">Use this chart to make informed decisions about resource allocation, feeding schedules, and overall poultry management strategies.</p>
        
        <h2 class="section-title">Chart Updates:</h2>
        <p class="update-text">The chart updates automatically based on real-time data from your poultry management system. You can also click the "Refresh" button to update it manually.</p>
        
        <p class="update-text">For any questions or further analysis, please contact our poultry management team.</p>
    </div>

    <script src="assets/js/chart.js"></script>
</body>
</html>

