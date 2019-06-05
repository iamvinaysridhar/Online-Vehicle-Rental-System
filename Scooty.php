<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="VKS.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Check out our Scooters</title>
<embed name="song" src="Elektronomia_-_Sky_High_NCS_Release[ListenVid.com].mp3" loop="true" hidden="true" autostart="true"></embed>
<style type="text/css">
a:link { text-decoration:none; color:white; }
a:visited { text-decoration:none; color:white; }
a:hover { text-decoration:none; color:white; }
a:active { text-decoration:none; color:white; }
</style>
<style>
#overlay{
width:100%;
height:100%;
background-color:#000000;
position:fixed;
display:compact;
margin:0;
opacity:0%;
background-position:center;
z-index:99999999999999999999;
size:landscape;
}
</style>
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
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: center;
		}
		.data-table tfoot th:first-child {
			text-align: center;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
		<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #000000;
}

.navbar a {
  float: left;
  font-size: 25px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: black;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="padding:0; margin:0">
<div id="overlay"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<center><img src="preloader.gif" height="200" width="200" /></div></center>
<div style="background-color:#000040; font-weight:600;">
<table border="1" style="font-size:50px"; font:"Times New Roman, Times, serif"">
<tr>
<td align="left"> <img src="VKS.jpg" height=100 width=200 /> </td>
<td align="center" height="75" width="100%" bgcolor="#FF8040" >
<marquee behavior="alternate" scrollamount="25">
VKS Vehicle Rental Service
</marquee>
</td>
</tr>
</table> 
</div>
<div class="navbar">
  <a href="home.php">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">VEHICLES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cars.php">CARS</a>
      <a href="bikes.php">BIKES</a>
      <a href="scooty.php">SCOOTERS</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">BOOKING
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="make_booking.php">MAKE YOUR BOOKING</a>
      <a href="cancel_booking.php">CANCEL YOUR BOOKING</a>
    </div>
  </div> 
  <a href="aboutus.php">ABOUT US</a>
  <a href="rateus.php">RATE US</a>
  <a href="login.php">LOGIN</a>
</div>
<div>
<br><br>
<table class="data-table">
		<h1 class="title">Check out our Scooters</h1>
		<br>
		<thead>
			<tr>
				<th>Scooty Reg No</th>
				<th>Scooty Name</th>
				<th>Scooty Rent Per Day</th>
				<th>Scooty Mileage</th>
				<th>Scooty Availability</th>
			</tr>
		</thead>
		<tbody>
		<?php
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = 'vinaytiger'; 
$db_name = 'vehicle_rental_service'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$query=mysqli_query($conn,"select Scooty_Reg_No,Scooty_Name,Scooty_Rent_Per_Day,Scooty_Mileage,Scooty_Availability from scooty");
		while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['Scooty_Reg_No'] . "</td>";
echo "<td>" . $row['Scooty_Name'] . "</td>";
echo "<td>" . $row['Scooty_Rent_Per_Day'] . "</td>";
echo "<td>" . $row['Scooty_Mileage'] . "</td>";
echo "<td>" . $row['Scooty_Availability'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
		</tbody>
			</table>
			<br>
			<br>

</body>
<script>
setTimeout('document.getElementById("overlay").style.display="none"', 1750);
</script>
</html>