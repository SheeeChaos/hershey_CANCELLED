<!-- add_category.php -->
<?php
include('hersheydb.sql'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['category'])) {
    $category_name = $_POST['category_name'];
    $products = $_POST['food']; // Array of selected product IDs

    // Insert the new category into your database
    $sql_insert_category = "INSERT INTO category (category) VALUES ('$category')";
    if (mysqli_query($conn, $sql_insert_category)) {
        $category_id = mysqli_insert_id($conn); // Get the ID of the inserted category

        // Insert product-category associations into a junction table (assuming you have one)
        foreach ($products as $product_id) {
            $sql_insert_product_category = "INSERT INTO food (id, category) VALUES ('$id', '$category')";
            mysqli_query($conn, $sql_insert_product_category);
        }

        // Redirect back to the dashboard or category listing page
        header("Location: adminDashboard.php");
        exit();
    } else {
        // Error inserting category
        echo "Error: " . $sql_insert_category . "<br>" . mysqli_error($conn);
    }
}

?>
