<?php

	// Connection details
	$servername = "localhost";
	$database = "container";
	$username = "";
	$password = "";

	 // Skapar kopplingen med databasen
	$conn = mysqli_connect($servername, $database, $username, $password);

	// Kontrollerar anslutningen
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO sensor_data (Distance) VALUES ('".$_GET["distance"]."')"; 

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	}
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    $conn->close();

?>