<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="VKS.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<title>Rate Us</title>
<embed name="song" src="Janji - Heroes Tonight (instrumental) - YouTube (360p).mp4"  loop="true" hidden="true" autostart="true"></embed>
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
<script type="text/javascript">
function validate()
{
	var n=document.myForm.name.value;
	if(!isNaN(n)||n.length<4||n.length>20)
	{
		alert("Please enter valid name")
		document.myForm.name.focus();
		return false;
	}
	var b=document.myForm.booking.value;
	
	if(isNaN(b)||b.length!=8)
	{
		alert("Please enter valid Booking ID having 8 numbers")
		document.myForm.booking.focus();
		return false;
	}
	var p=document.myForm.phone.value;
	
	if(isNaN(p)||p.length!=10)
	{
		alert("Please enter valid Phone Number")
		document.myForm.phone.focus();
		return false;
	}
	var veh=document.myForm.vehicle.value;
	if(veh=" "))
	{
		alert("Please rate the Vehicle Performance");
		document.myForm.vehicle.focus();
		return false;
	}
	return(true);
}
</script>
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
<div style="background-color:#FF8040;">
<br><br><br><br>
<center>
<table border="25" color="white" style="font-size:25px" bordercolor="#000000">
<h1>RATE US ON THE SCALE OF 1-5 </h1><br>
<form method="post" action="insert.php" name="myForm">
<tr>
<td> <b>Enter your Full Name</b></td>
<td> <input type="text" name="name" size="33" style="font-size:15px" required>
</tr>
<tr>
<td> <b>Enter Booking ID</b></td>
<td> <input type="text" name="booking" size="33" style="font-size:15px" required>
</tr>
<tr>
<td> <b>Enter your E-Mail</b></td>
<td> <input type="email" name="email" size="33" style="font-size:15px" required>
</tr>
<tr>
<td> <b>Enter your Phone Number</b></td>
<td> <input type="text" name="phone" size="33" style="font-size:15px" required>
</tr>
<tr>
<td> <b>Vehicle Performance</b></td>
<td> <input type="radio" name="vehicle" value="1" required><b> 1 </b>
<input type="radio" name="vehicle" value="2" required> <b>2</b> 
<input type="radio" name="vehicle" value="3" required> <b>3</b>
<input type="radio" name="vehicle" value="4" required> <b>4</b> 
<input type="radio" name="vehicle" value="5" required> <b>5</b>
</td>
</tr>
<tr>
<td> <b>Value For Money</b></td>
<td> <input type="radio" name="money" value="1" required> <b>1</b> 
<input type="radio" name="money" value="2" required> <b>2</b>
<input type="radio" name="money" value="3" required> <b>3</b> 
<input type="radio" name="money" value="4" required> <b>4</b> 
<input type="radio" name="money" value="5" required> <b>5</b>
</td>
</tr>
<tr>
<td> <b>Management Service</b></td>
<td> <input type="radio" name="management" value="1"  required> <b>1</b> 
<input type="radio" name="management"  value="2" required> <b>2</b>
<input type="radio" name="management"  value="3" required> <b>3</b> 
<input type="radio" name="management"  value="4" required> <b>4</b> 
<input type="radio" name="management"  value="5" required> <b>5</b>
</td>
</tr>
<tr>
<td> <b>Overall Rating</b></td>
<td> <input type="radio" name="rating" value="1" required> <b>1</b> 
<input type="radio" name="rating" value="2" required> <b>2</b>
<input type="radio" name="rating" value="3" required> <b>3</b> 
<input type="radio" name="rating" value="4" required> <b>4</b> 
<input type="radio" name="rating" value="5" required> <b>5</b>
</td>
</tr>
<tr>
<td> <b>Will you visit us again if needed?</b></td>
<td> <input type="radio" name="yesno" value="yes" required> <b>Yes</b> 
<input type="radio" name="yesno" value="no" required> <b>No</b>
</td>
</tr>
<tr>
<td> <b>Feedback/Complaints Section</b></td>
<td> <textarea rows="5" cols="35" style="font-size:15px" name="feedback" required></textarea> 
</td>
</tr>
</table>
</center>
<br>
<table align="center"> 
<tr>
<td> <input type="submit" value="Submit"  name="Submit"></td>
<td> <input type="reset"  value="Reset" name="Reset"></td>
</tr> 
</form>
</table>
<br>
<br>
</div>
<div style="background-color:#FF8040; font-size:25px">
<center>
<b>  RATING: </b>&nbsp;
<b>1 - Worst </b>&nbsp;
<b>2 - Bad </b>&nbsp;
<b>3 - Average </b>&nbsp;
<b>4 - Good </b>&nbsp;
<b>5 - Excellent </b>&nbsp;
</center>
<br>
<h1><b style="font-size:40px">&nbsp;<u>NOTE:</b></h1></u>
<b style="font-size:30px"><pre> (1) Please give us your honest feedback in this Rating Form.
 Please refrain from typing NONSENSE in this Form as well.</b></pre>
<b style="font-size:30px"><pre> (2) We aspire to keep improving day-by-day. We don't mind any negative feedback 
 and will work towards customer satisfaction as well as quality service.</b></pre> 
 <br>

</body>
<script>
setTimeout('document.getElementById("overlay").style.display="none"', 1750);
</script>
</html>
 