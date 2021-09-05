<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "priyanka");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
		$balance = $_REQUEST['balance'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$name',NULL,'$email','$gender','$balance')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n "
				. "$gender\n $balance\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
