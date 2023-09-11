<!DOCTYPE html>
<html>
<head>
    <title>Delete Sales Record</title>
    <!-- You can link to a CSS file for styling here if needed -->
</head>
<body>
    <?php
    // Include your database connection code here
    include("includes/db.php");

    // Check if an ID parameter is passed in the URL
    if (isset($_GET['id'])) {
        $saleId = $_GET['id'];

        // Delete the sales record based on the ID
        $deleteSql = "DELETE FROM sales WHERE id = $saleId";

        if ($conn->query($deleteSql) === TRUE) {
            // Redirect to the view_sales.php page after successful deletion
            header("Location: view_sales.php");
            exit();
        } else {
            // Handle error: Deletion failed
            echo "<p>Error deleting record: " . $conn->error . "</p>";
        }
    } else {
        // Handle error: ID parameter not provided
        header("Location: view_sales.php");
        exit();
    }
    ?>
</body>
</html>

