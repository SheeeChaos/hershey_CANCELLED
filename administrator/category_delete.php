<?php
session_start();
include('../config/config.php'); // Update the path to include the config.php file

if (isset($_GET['category_id'])) {
  // Update is_archived to TRUE for the specific category ID
  $sql_update = "UPDATE categories SET is_archived = TRUE WHERE category_id = ?";

  $stmt = $conn->prepare($sql_update);
  $stmt->bind_param("i", $_GET['category_id']);

  if ($stmt->execute()) {
    // Check if the query was successful in updating the database
    if ($stmt->affected_rows > 0) {
      $_SESSION['success'] = 'Category archived successfully';
    } else {
      $_SESSION['error'] = 'No rows were affected';
    }
  } else {
    $_SESSION['error'] = 'Something went wrong while archiving category: ' . $stmt->error;
  }

  // Close the statement and database connection
  $stmt->close();
  $conn->close();
} else {
  $_SESSION['error'] = 'Select category to archive first';
}

header('location: category.php');
?>