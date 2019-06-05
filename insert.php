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
$bid = mysqli_real_escape_string($conn, $_POST['booking']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$vehicle = mysqli_real_escape_string($conn, $_POST['vehicle']);
$money = mysqli_real_escape_string($conn, $_POST['money']);
$service = mysqli_real_escape_string($conn, $_POST['management']);
$rating = mysqli_real_escape_string($conn, $_POST['rating']);
$visit = mysqli_real_escape_string($conn, $_POST['yesno']);
$feedback = mysqli_real_escape_string($conn, $_POST['feedback']);



$sql = "INSERT INTO user_ratings(UserName,BookingID,EMail,PhoneNumber,VehiclePerformance,ValueforMoney,ManagementService,OverallRating,WillYouVisitUsAgain,Feedback) VALUES('$name','$bid','$email','$phone','$vehicle','$money','$service','$rating','$visit','$feedback')";
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