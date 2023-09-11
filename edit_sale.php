<!-- edit_sale.php -->

<?php
// Include your database connection code here
include("includes/db.php");

// Check if an ID parameter is passed in the URL
if (isset($_GET['id'])) {
    $saleId = $_GET['id'];
    
    // Fetch the sales record based on the ID
    $sql = "SELECT * FROM sales WHERE id = $saleId";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $productName = $row['product_name'];
        $quantity = $row['quantity'];
        $totalSales = $row['total_sales'];
        $date = $row['sale_date'];


    } else {
        // Handle error: Record not found
        header("Location: view_sales.php");
        exit();
    }
} else {
    // Handle error: ID parameter not provided
    header("Location: view_sales.php");
    exit();
}

// Update sales record if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newProductName = $_POST['product_name'];
    $newQuantity = $_POST['quantity'];
    $newTotalSales = $_POST['total_sales'];
    $newDate = $_POST['date'];
    
    // Perform the update in the database
    $updateSql = "UPDATE sales SET product_name = '$newProductName', quantity = $newQuantity, total_sales = $newTotalSales, date = '$newDate' WHERE id = $saleId";
    
    if ($conn->query($updateSql) === TRUE) {
        // Redirect to the view_sales.php page after successful update
        header("Location: view_sales.php");
        exit();
    } else {
        // Handle error: Update failed
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Edit Sales Record</h1>
        <a class="back-button" href="index.php">Back</a>
        <form method="post">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $productName; ?>" required>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="<?php echo $quantity; ?>" required>

            <label for="total_sales">Total Sales ($):</label>
            <input type="number" name="total_sales" value="<?php echo $totalSales; ?>" required>

            <label for="date">Date:</label>
            <input type="date" name="date" value="<?php echo $date; ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
