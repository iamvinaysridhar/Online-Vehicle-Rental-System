<html>
<head>
<title>SUCCESS</title>
<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<?php
$server = "localhost";
$user = "root";
$pass = "vinaytiger";
$dbname = "vehicle_rental_service";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$aadhaar = mysqli_real_escape_string($conn, $_POST['Aadhaar']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$vehicle_category = mysqli_real_escape_string($conn, $_POST['vehicle']);
$vehicle = mysqli_real_escape_string($conn, $_POST['veh']);
$from = mysqli_real_escape_string($conn, $_POST['from']);
$to = mysqli_real_escape_string($conn, $_POST['to']);
$yesno = mysqli_real_escape_string($conn, $_POST['yesno']);




$sql = "INSERT INTO bookings_made(Name,EMail,PhoneNumber,AadhaarNumber,Address,CategoryofVehicle,VehicleChosen,BookingFrom,BookingTill,HaveTheyReadRules) VALUES('$name','$email','$phone','$aadhaar','$address','$vehicle_category','$vehicle','$from','$to','$yesno')";
if($conn->query($sql) === TRUE){
 echo " ";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
 $conn->close();
 header("refresh:1; url=success.php")
?>

</body>
</html>