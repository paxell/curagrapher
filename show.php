<!DOCTYPE html>
<html>

<head>
	<title>Photo manager | Curatographer</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

<?php
// Create connection
$con=mysqli_connect("localhost","pax","JRqThV6UrPvjTNTv","photo_manager");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "<h2>There was an error</h2>";
}

$result = mysqli_query($con,"SELECT File FROM Image");

while($row = mysqli_fetch_array($result)) {
  $file = $row['File'];
  echo "<img src='upload/{$file}' />";
}

mysqli_close($con);
?>

</body>
</html>