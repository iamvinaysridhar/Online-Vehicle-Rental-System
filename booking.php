<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="VKS.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BOOKING PORTAL</title>
<embed name="song" src="Elektronomia - Limitless [NCS Release].mp3" loop="true" hidden="true" autostart="true"></embed>
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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 400;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 200;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<div style="background-color:#FF8040;">
<br><br><br><br><br><br><br><br>
<center>
<b style="color:#000000; font-size:60px"> We have 2 options under this Booking Section! </b><br><br>
<b style="color:#000000; font-size:40px">(A) To Make a Booking, click here:&nbsp;</b> <a href="make_booking.php" style="color:#400080; text-decoration:underline; font-size:40px" ><b> MAKE A BOOKING </a></b><br><br>
<b style="color:#000000; font-size:40px">(B) To Cancel a Booking, click here:&nbsp;</b> <a href="cancel_booking.php" style="color:#400080; text-decoration:underline; font-size:40px"> <b>CANCEL A BOOKING </a></b><br>
<br><br><br><br><br><br><br><br>
</center>
</div>
</body>
<script>
setTimeout('document.getElementById("overlay").style.display="none"', 1750);
</script>
</html>
