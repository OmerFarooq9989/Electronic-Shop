<?php
session_start();

	// $fname = $_POST["fullname"];
	// $email = $_POST["mail"];
	// $password = $_POST["password"];
	// $add1 = $_POST["address"];
	// $_SESSION["fname"]=$fname;


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {
		$sql = "SELECT * FROM SERVICE ";

		$result = mysqli_query($conn, $sql);
		echo" <form action='delete.php' method='post'>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<div class='row ele'>

					<div class='col-md-1'>".$row['Type']."</div>
					<div class='col-md-1'>".$row['Provider']."</div>
					<div class='col-md-3'>".$row['Descripition']."</div>
					<div class='col-md-1'>".$row['price']."</div>
					<div class='col-md-1'>".$row['Unique_id']."</div>
					<div class='col-md-1'><input type='checkbox' id='vehicle' name='vehicle' value='".$row['Unique_id']."'></div>
					</div>";
 				
 }

echo"<div> <button type='submit' class='genric-btn success radius'>Delete</a></div>
					</form>";
             }
	// 	//header("location: index.html");
	// 	}



?>