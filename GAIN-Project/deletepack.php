<?php

// Start the session
session_start();

$Bookid = $_GET['id'];
$dbname = "gain";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM booking WHERE Book_id = $Bookid"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: bookview.php'); 
   
} else {
    echo "Error deleting record";
}
?>