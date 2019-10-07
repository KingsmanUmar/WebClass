
<?php

include 'conn.php';

$id = $_GET['id'];


$query = "DELETE FROM `students` WHERE `id` = $id";
$result = mysqli_query($con,$query);
if($result){
	echo "Successfully Deleted";
}
else{
	echo "Failed to Delete";
}
// $json_data = array();
// while ($row = mysqli_fetch_assoc($result)) {
// 	$json_data[] = $row;
// }

// echo json_encode($json_data);

?>