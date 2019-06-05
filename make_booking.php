<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="VKS.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Make your Booking</title>
<embed name="song" src="Janji - Heroes Tonight (instrumental) - YouTube (360p).mp4" loop="true" hidden="true" autostart="true"></embed>
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
<h1>MAKE YOUR BOOKING FOR A VEHICLE </h1><br>
<form method="post" action="insert2.php" name="myForm">
<tr>
<td> <b>Enter your Full Name</b></td>
<td> <input type="text" name="name" size="33" style="font-size:15px" required>
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
<td> <b>Enter your Aadhaar Number</b></td>
<td> <input type="text" name="Aadhaar" size="33" style="font-size:15px" required>
</tr>
<tr>
<td> <b>Enter your Current Address</b></td>
<td> <textarea rows="5" cols="35" style="font-size:15px" name="address" required></textarea> 
</td>
</tr>
<tr>
<td> <b>Category of Vehicle Required</b></td>
<td> <input type="radio" value="car" name="vehicle" required><b> CAR </b>
<input type="radio" value="bike" name="vehicle" required> <b>BIKE</b> 
<input type="radio" value="scooty" name="vehicle" required> <b>SCOOTY</b>
</td>
</tr>
<tr>
<td> <b>Which Vehicle was Chosen?</b></td>
<td> 
<select name="veh" width="100%" required>
<option value="[BIKES]" name="[BIKES]" disabled="disabled">[BIKES]</option>
<option value="1" selected disabled="disabled"></option> 
<option value="APACHE RTR 200" name="APACHE RTR 200">APACHE RTR 200</option>
<option value="BAJAJ AVENGER" name="BAJAJ AVENGER">BAJAJ AVENGER</option>
<option value="BAJAJ DOMINAR" name="BAJAJ DOMINAR">BAJAJ DOMINAR</option>
<option value="BENELLI 600i" name="BENELLI 600i">BENELLI 600i</option>
<option value="HERO GLAMOUR" name="HERO GLAMOUR">HERO GLAMOUR</option>
<option value="HERO KARIZMA ZMR" name="HERO KARIZMA ZMR">HERO KARIZMA ZMR</option>
<option value="HONDA CB UNICORN" name="HONDA CB UNICORN">HONDA CB UNICORN</option>
<option value="HONDA HORNET" name="HONDA HORNET">HONDA HORNET</option>
<option value="KTM RC 390" name="KTM RC 390">KTM RC 390</option>
<option value="PULSAR NS 200" name="PULSAR NS 200">PULSAR NS 200</option>
<option value="ROYAL ENFIELD INTERCEPTOR" name="ROYAL ENFIELD INTERCEPTOR">ROYAL ENFIELD INTERCEPTOR</option>
<option value="SUZUKI GIXXER" name="SUZUKI GIXXER">SUZUKI GIXXER</option>
<option value="SUZUKI INTRUDER" name="SUZUKI INTRUDER">SUZUKI INTRUDER</option>
<option value="TRIUMPH STREET TRIPLE" name="TRIUMPH STREET TRIPLE">TRIUMPH STREET TRIPLE</option>
<option value="YAMAHA FAZER" name="YAMAHA FAZER">YAMAHA FAZER</option>
<option value="17" disabled="disabled"></option>
<option value="[CARS]" name="[CARS]" disabled="disabled">[CARS]</option> 
<option value="19" disabled="disabled"></option>
<option value="HYUNDAI CRETA" name="HYUNDAI CRETA">HYUNDAI CRETA</option>
<option value="JEEP WRANGLER" name="JEEP WRANGLER">JEEP WRANGLER</option>
<option value="MAHINDRA BOLERO" name="MAHINDRA BOLERO">MAHINDRA BOLERO</option>
<option value="MAHINDRA MARAZZO" name="MAHINDRA MARAZZO">MAHINDRA MARAZZO</option>
<option value="MAHINDRA SCORPIO" name="MAHINDRA SCORPIO">MAHINDRA SCORPIO</option>
<option value="MARUTI SUZUKI ERTIGA" name="MARUTI SUZUKI ERTIGA">MARUTI SUZUKI ERTIGA</option>
<option value="MITSUBISHI LANCER" name="MITSUBISHI LANCER">MITSUBISHI LANCER</option>
<option value="MARUTI SUZUKI ALTO" name="MARUTI SUZUKI ALTO">MARUTI SUZUKI ALTO</option>
<option value="SWIFT DZIRE" name="SWIFT DZIRE">SWIFT DZIRE</option>
<option value="TOYOTA ETIOS LIVA" name="TOYOTA ETIOS LIVA">TOYOTA ETIOS LIVA</option>
<option value="TOYOTA INNOVA CRYSTA" name="TOYOTA INNOVA CRYSTA">TOYOTA INNOVA CRYSTA</option>
<option value="VITARA BREZZA" name="VITARA BREZZA">VITARA BREZZA</option>
<option value="VOLKSWAGEN TIGUAN" name="VOLKSWAGEN TIGUAN">VOLKSWAGEN TIGUAN</option>
<option value="VOLKSWAGEN VENTO" name="VOLKSWAGEN VENTO">VOLKSWAGEN VENTO</option>
<option value="MARUTI SUZUKI WAGONR" name="MARUTI SUZUKI WAGONR">MARUTI SUZUKI WAGONR</option>
<option value="35" disabled="disabled"></option>
<option value="[SCOOTY]" disabled="disabled" name="[SCOOTY]">[SCOOTY]</option>
<option value="37" disabled="disabled"></option>
<option value="HERO PLEASURE" name="HERO PLEASURE">HERO PLEASURE</option>
<option value="HONDA ACTIVA" name="HONDA ACTIVA">HONDA ACTIVA</option>
<option value="HONDA DIO" name="HONDA DIO">HONDA DIO</option>
<option value="MAHINDRA GUSTO" name="MAHINDRA GUSTO">MAHINDRA GUSTO</option>
<option value="SUZUKI ACCESS" name="SUZUKI ACCESS">SUZUKI ACCESS</option>
<option value="SUZUKI BURGMAN" name="SUZUKI BURGMAN">SUZUKI BURGMAN</option>
<option value="TVS JUPITER" name="TVS JUPITER">TVS JUPITER</option>
<option value="TVS SCOOTY PEP" name="TVS SCOOTY PEP">TVS SCOOTY PEP</option>
<option value="YAMAHA ALPHA" name="YAMAHA ALPHA">YAMAHA ALPHA</option>
<option value="YAMAHA FASCINO" name="YAMAHA FASCINO">YAMAHA FASCINO</option>
</select>
</td>
</tr>
<tr>
<td rowspan="2"> <b>Choose the dates for which you want the Vehicle</b></td>
<td> <b>From:&nbsp;<input type="date" name="from" required></b> </td>
</tr>
<tr>
<td> <b>To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="to" required></b> </td>
</tr>
<tr>
<td> <b>Have you read the Rules specified below the form?</b></td>
<td> <input type="radio" value="yes" name="yesno" required> <b>Yes</b> 
<input type="radio"  value="no" name="yesno" required> <b>No</b>
</td>
</tr>
</table>
</center>
<br>
<table align="center"> 
<tr>
<td> <input type="submit" value="Submit" ></td>
<td> <input type="reset"  value="Reset" ></td>
</tr> 
</form>
</table>
<br><br>
<h1><b style="font-size:40px">&nbsp;<u>RULES:</b></h1></u>
<b style="font-size:30px"><pre> (1)There is no Provision for Online Payment of the Rent.
 Amount shall be paid by you while receiving the Vehicle at Our Location.</b></pre>
<b style="font-size:30px"><pre> (2) Rent will be done on day-by-day Basis.
 The cost of rent for each day for a vehicle as well as it's availability
 can be found out under <a href="vehicles.php" style="color:#400080; text-decoration:underline">Vehicles Section</a>.</b></pre>
 <b style="font-size:30px"><pre> (3) Vehicles will not be provided to you if you don't Book for them Online.</b></pre>
 <b style="font-size:30px"><pre> (4) Cancellation of Booking can be done anytime online under
 <a href="cancel_booking.php" style="color:#400080; text-decoration:underline">Cancel Booking Section</a> using the Booking ID generated and provided to you
 via a message to the number you provided while you made a booking.</b></pre> 
 <b style="font-size:30px"><pre> (5) Please fill up the form with proper details and no ERRORS before Submitting.
 In case of any errors after the Booking has been made, you cannot modify.
 You need to CANCEL the Booking and then Make a Booking once again.</b></pre>
 <b style="font-size:30px"><pre> (6) YOU and only YOU are responsible for any damages to the vehicle,
 if occured. In this case, you will face consequences and have to pay the
 penalty at our Location.</b></pre>
 <b style="font-size:30px"><pre> (7) You are responsible for Vehicle Fuel Charges and the vehicle must be 
 returned on time at our Location. Otherwise, you have to pay the fine of Rupees 
 1000 per Day late at our Location.</b></pre>
 <b style="font-size:30px"><pre> (8) If you indulge in robbery of our vehicle, then necessary actions will
 be taken place against you.</b></pre>
<br>
</div>
</body>
<script>
setTimeout('document.getElementById("overlay").style.display="none"', 1750);
</script>
</html>