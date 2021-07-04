<?php
$delete = $_POST["vehicle"];
echo $delete;


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {
		$sql = "DELETE FROM SERVICE WHERE Unique_id='$delete' ";

		$result = mysqli_query($conn, $sql);
 				
 			header("location: View_Service.html");
             }
	
	// 	}




?>