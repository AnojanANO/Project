<?php

// Start the session
session_start();



// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gain";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `package`";


$result1 = mysqli_query($connect, $query);
if(isset ($_POST['RESERVE'])) {
    $pack = $_POST['option'];
       $date = $_POST['date'];
	      $due = $_POST['due'];
 
		     $person = $_POST['person'];
			    $address = $_POST['address'];
	     
            



	$sql = "INSERT INTO booking (Book_id,User_id,Pack_id,Book_date,No_of_persons,address,DURATION,Price,Status)
VALUES ('','1','$pack','$date','$person','$address','$due','0','pending')";

if (mysqli_query($connect, $sql)) {
   $success=  "Request successfully completed";
   echo "<script type='text/javascript'>alert('$success');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

}

?> 
<?php


$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'gain'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}



$sql = 'SELECT DISTINCT(b.Book_id),p.Price,p.Pack_Name,b.Book_date,b.No_of_persons,b.address,b.DURATION,b.Status FROM booking b,package p,user u WHERE b.User_id="1" AND b.Pack_id=p.Pack_id AND b.Status="pending"';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier Management System</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" href="css/topheader.css" type="text/css"> 
<link rel="stylesheet" href="css/slider.css" type="text/css"> 
<link href="css/footer.css" rel="stylesheet">
<link href="css/form1.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  <link href="css/aalpha.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/topheader.css"> 
  
<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
             .data-table tbody tr:nth-child(even) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color:#e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>




</head>
<body >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" >
  <tbody>
  <tr><td>
  <div class="container-fluid  top2 ">
   <div class="container top1">
     <div class="row">
	    <div class="col-sm-2">
	    <img class="img-responsive" src="images/GAIN.png" alt="GAIN" width="500" height="600" />
		</div>
		<div class="col-sm-3 adress">
		<img src="images/address.png"/><label>Address</label>
		<p>Jaffna,Sri Lankla.</p>  
		</div>
		<div class="col-sm-4 call">
		<img src="images/call.png"/><label>Mobile Number :</label>
		<p>+94 11202020202</p>		
		</div>
		<div class="col-sm-3 address">
		<img src="images/time.png"/><label>Opening Hours :</label>
		<p>MON – FRI: 8AM – 5PM</p>
		</div>
       </div>
   </div>
 </div>
 <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		  <div class="container">
  <div class="container-fluid">
  	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav"  >

      <li ><a href="#">HOME</a></li>
      <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">PARCEL <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="final.php">VIEW ORDER</a></li>
          <li><a href="request.php">MAKE ORDER</a></li>
         </ul>
      </li>
	
     <li><a href="#">PACKAGE</a></li>
	   <li class="active" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">BOOKING<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bookview.php" >BOOKING DETAILS</a></li>
          <li><a href="booking.php">NEW BOOKING</a></li>
		</ul>
      </li>
      
      <li><a href="#">CONTACT US</a></li>
      <li><a href="#">ABOUT US</a></li>
      <li><a href="#">LOGOUT</a></li>
    </ul>
	</div>
  </div>
  </div>
</nav>
  </td>
  </tr>
  <tr><td>


<table border="0" align="center" width="80%">
    <tbody><tr>
      
    </tr>
	<h1 style="color:white;">BOOKING DETAILS</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>NO</th>
				<th>Book ID</th>
				<th>Per Price</th>
				<th>Package Name</th>
				<th>Book Date</th>
				<th>No of person</th>
				<th>address</th>
				<th>Tour Duration</th>
                                
                                <th>Status</th>
				<th>Edit</th>
				<th>Delete </th>
			</tr>
		</thead>
		<tbody>
		<?php
                
		$no 	= 1;
		$total 	= 0;
                 $res=0;
		while ($row = mysqli_fetch_array($query))
		{
          

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Book_id'].'</td>
					<td>'.$row['1'].'</td>
					<td>'. $row['Pack_Name'] . '</td>
                                        <td>'. $row['Book_date'] .'</td>
					<td>'.$row['No_of_persons'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['DURATION'].'</td>

<td>'.$row['Status'].'</td>
					<td><a href="editpack.php?id='.$row['Book_id'].' ">Edit</a></td>
					<td><a href="deletepack.php?id='.$row['Book_id'].' ">delete</a></td>
				</tr>';
				$no++;
		}?>
		</tbody>
	</table>
  </td></tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td bgcolor="#ee6012">&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
	
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td colspan="2" class="aalpha" bgcolor="#ee6012" height="25"><div align="center"></div></td>
  </tr>
  <tr>
  <td>
<footer class="container-fluid" style="background-color:rgb(26,26,26); width:100%;">
     <div class="container">
         <div class="row footer1">
		     <div class="col-sm-3">
			    <p>ABOUT US</p>
				 <label>We are making tour packages according to our personal experience with many travelers, and offering day tours and transport and Driver/guide only service and hotel booking and train ticket booking according to client’s request</label>
			 </div>
			 
			 <div class="col-sm-3 linkfooter">
			    <p>USEFUL LINKS</p>
				<ul class="list-unstyled">
				<li><a href="all-services.php" >All Services</a> </li>
					<li><a href="ocean.php" >Ocean Freight Forwarding</a> </li>
					<li><a href="road.php" >Road Freight Forwarding </a> </li>
					<li><a href="air.php" >Air Freight Forwarding</a> </li>
					 <li><a href="ground.php" >Ground Transport</a> </li>
					<li><a href="warehouse.php" >Warehousing</a> </li>
					</ul>
			 </div>
			 
			 <div class="col-sm-3">
			     <p>COMPANY INFORMATION</p>
				 <ul class="list-unstyled">
				   
					 <li><br><br></li>
					  <li><img src="images/contact.png"> &nbsp +94- 1120202020</li>
					  <li><img src="images/email.png"> &nbsp  tourGain@gmail.com </li>
					  <li><label>jaffna ,Sri Lanka.</label></li>
				 </ul>
			 </div>
			 
			 <div class="col-sm-3">
			    <p>COMPANY ADDRESS</p>
					
				<ul class="list-unstyled">
				<li>110/5,NEW STREET,</li>
                                 <li>MANNAR ROAD,</li>
                                   <li>SRI LANKA.</li>
				
				<li><br></li>
				<li><div class="footer1-border"><a href="#"><img src="images/fb-footer.png"></a><a href="#"><img src="images/twitter-footer.png"></a></div></li>
				</ul>
			 </div>
			 </div>
		    <div class="footer2">
			
			<div class="row" >
			
			<div class="col-sm-6">
			<strong  style="float:left;color:gray;"> ©Tour and Travel Management System 2020.All right reserved</strong>
			</div>
			
			<div class="col-sm-6">
			<div style="float:right;">
			<img src="images/master.png">
			<img src="images/visa.png">
			<img src="images/american-express.png">
			<img src="images/discover.png">
			</div>
			</div>
			
			</div>
			
		 </div>
    </footer>
  </td>
  </tr>
</tbody></table>

</body></html>