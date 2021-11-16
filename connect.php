<?php
	$Name = $_POST['Name'];
	$Contact = $_POST['Contact no'];
	$Email = $_POST['Email'];
	$Craft = $_POST['Craft'];
	$Duration = $_POST['Duration'];
	$Days = $_POST['Days'];

	// Database connection
	$conn = new mysqli('localhost','root','','crafteria');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into training form(Name, Contact no, Email, Craft, Duration, Days) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Name, $Contact, $Email, $Craft, $Duration, $Days);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>