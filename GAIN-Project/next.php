<?php

// Start the session
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gain";



$connection = mysqli_connect($hostname, $username, $password, $databaseName);


if(isset ($_POST['submit'])) {
$pack = $_POST['option'];
$id=$_GET['id'];
       $date = $_POST['date'];
	      $due = $_POST['due'];
		     $person = $_POST['person'];
			    $address = $_POST['address'];

$sql="UPDATE `booking` SET `Pack_id`='$pack',`Book_date`='$date',`No_of_persons`='$person',`address`='$address',`DURATION`=' $due' WHERE `Book_id`='$id' ";
if (mysqli_query($connection, $sql)) {
   $success=  "Request successfully completed";
   echo "<script type='text/javascript'>alert('$success');</script>";
header('Location: bookview.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

}
?>