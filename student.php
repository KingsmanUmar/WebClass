<?php
include 'conn.php';

$std_name = $_POST['std_name'];
$std_email = $_POST['std_email'];
$std_dob = $_POST['std_dob'];
$std_address = $_POST['std_address'];
$std_phno = $_POST['std_phno'];

$query = "INSERT INTO `users` (`std_name`,`std_email`,`std_dob`,`std_address`,`std_phno`) VALUES('$std_name','$std_email','$std_dob','std_address','std_phno')";

$result = mysqli_query($con,$query);

if ($result) {
	echo "successfully inserted";
}
else
{
	echo "Failed to insert";
}

?>