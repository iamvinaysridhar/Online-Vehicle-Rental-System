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
$bid = mysqli_real_escape_string($conn, $_POST['booking']);
$vehicle_category = mysqli_real_escape_string($conn, $_POST['vehicle']);
$vehicle = mysqli_real_escape_string($conn, $_POST['veh']);
$from = mysqli_real_escape_string($conn, $_POST['from']);
$to = mysqli_real_escape_string($conn, $_POST['to']);




$sql = "INSERT INTO cancellations_made(Name,Email,PhoneNumber,BookingID,CategoryofVehicle,VehicleChosen,BookingFrom,BookingTill) VALUES('$name','$email','$phone','$bid','$vehicle_category','$vehicle','$from','$to')";
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