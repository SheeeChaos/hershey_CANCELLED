<?php
session_start();
include('../config/config.php'); // Update the path to include the config.php file

if (isset($_POST['add'])) {
    // Retrieve form data
    $CategoryName = $_POST['category_name'];
    $Description = $_POST['description'];

    // Validate input
    if (empty($CategoryName) || empty($Description)) {
        $_SESSION['error'] = "All fields are required.";
        header('Location: category.php');
        exit();
    }

    // Insert data into the 'categories' table
    $sql = "INSERT INTO categories (category_name, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the query
        $stmt->bind_param("ss", $CategoryName, $Description);

        if ($stmt->execute()) {
            $_SESSION['success'] = "New category added successfully";
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = "Error preparing the SQL statement: " . $conn->error;
    }

    // Redirect back to the previous page
    header('Location: category.php');
    exit();
}
?>
