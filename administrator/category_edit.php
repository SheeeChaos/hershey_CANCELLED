<?php
session_start();
include_once('../config/config.php'); // Update the path to include the config.php file

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['edit'])) {
    // Get values from POST request
    $CategoryID = $_POST['category_id'];
    $CategoryName = $_POST['category_name'];
    $Description = $_POST['description'];
    
    // Validate if the values are being received
    if (empty($CategoryID) || empty($CategoryName) || empty($Description)) {
        $_SESSION['error'] = 'All fields are required.';
        header('location: category.php');
        exit();
    }

    // SQL query to update category
    $stmt = $conn->prepare("UPDATE categories SET category_name = ?, description = ? WHERE category_id = ?");
    $stmt->bind_param("ssi", $CategoryName, $Description, $CategoryID);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Category information successfully updated';
    } else {
        $_SESSION['error'] = 'Something went wrong while updating category: ' . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = 'Fill up edit form first';
}

// Redirect back to the categories page
header('location: category.php');
exit(); // Ensure no further code is executed after redirection
?>
