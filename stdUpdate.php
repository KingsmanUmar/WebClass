<?php
include 'conn.php';

$id = $_POST['id'];
$std_name = $_POST['std_name'];
$std_email = $_POST['std_email'];
$std_dob = $_POST['std_dob'];
$std_address = $_POST['std_address'];
$std_phno = $_POST['std_phno'];

$query = "UPDATE `students` SET `std_name` = '$std_name',`std_email` = '$std_email',`std_address` = '$std_address',`std_dob` = '$std_dob',`std_phno` = '$std_phno' WHERE `id` = $id";

$result = mysqli_query($con,$query);

if ($result) {
	echo "successfully Updated";
}
else
{
	echo "Failed to Update";
}

?>