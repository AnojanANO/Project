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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>GAIN</title>

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
	   <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BOOKING<span class="caret"></span></a>
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


<div class="container">
  <form action="bookview.php" method="post" >
  
  <div class="row">
    <div class="col-25">
      <label for="CPACK">CHOOSE PACKAGE</label>
    </div>
    <div class="col-75">
     
        <select name="option">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>">
<?php 

echo " PACKAGE  : &nbsp".$row1[1]."  &nbsp &nbsp &nbsp &nbsp PRICE : &nbsp".$row1[4]."";

?></option>

            <?php endwhile;?>

        </select>

      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="DATE">DEPARTURE DATE</label>
    </div>
    <div class="col-75">
      <input type="date" id="DATE" name="date">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="TOUR">TOUR DURATION</label>
    </div>
    <div class="col-75">
      <input type="text"  name="due" placeholder="duration">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="DATE">NO OF PERSONS</label>
    </div>
    <div class="col-75">
      <input type="TEXT" name="person" placeholder="how many persons">
       <input type="hidden"  name="price" value="<?php echo $price;?>">
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="subject">ADDRESS</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="address" placeholder="enter the address" style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
   
 <div class="col-25">
    
    </div>
    <div class="col-75">
       <input type="submit" name="RESERVE" value="RESERVE">
    </div>
  </div>
  </form>
</div>

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