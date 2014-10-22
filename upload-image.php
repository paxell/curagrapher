<!DOCTYPE html>
<html>

<head>
	<title>Photo manager | Curagrapher</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

<?php

// Create connection
$con = mysqli_connect("localhost","pax","JRqThV6UrPvjTNTv","photo_manager");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "<h2>There was an error</h2>";
}

if ($_FILES["file"]["error"] > 0) {
	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	} else {
	move_uploaded_file($_FILES["file"]["tmp_name"],
	"upload/" . $_FILES["file"]["name"]);
	echo "Image uploaded";

	$src = mysqli_real_escape_string($con, $_FILES["file"]["name"]);
	$loc = mysqli_real_escape_string($con, $_POST["location"]);
	$tag = mysqli_real_escape_string($con, $_POST["tag"]);

	$sql = "INSERT INTO Image (File, Location)
		VALUES ('$src', '$loc')";
		 
	$ret = mysqli_query($con,$sql);
		 
	$id = mysqli_insert_id($con);
		 
	$sql2 = "INSERT INTO Tag (Name, ImageID)
		VALUES ('$tag', '$id')";
		 
	$ret2 = mysqli_query($con,$sql2);
		
	if (!$ret || !$ret2) {
		die('Error: ' . mysqli_error($con));
	}

	echo "1 record added";

}

mysqli_close($con);

?>

</body>
</html>