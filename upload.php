<!DOCTYPE html>
<html>

<head>
	<title>Photo manager | Curagrapher</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

<form action="upload-image.php" method="POST" enctype="multipart/form-data">

<label>Upload image</label><input type="file" name="file" id="file" />

<!-- thumbnail preview -->

<label>Category</label>
<!-- select multiple -->
<select name="category">
	<option>Landscape</option>
	<option>Buildings</option>
	<option>People</option>
</select>

<label>Location</label>
<!-- list of world cities? use exif data? -->
<select name="location">
	<optgroup label="Brisbane">
		<option>Toowong</option>
		<option>South Bank</option>
	</optgroup>
	<optgroup label="Sunshine Coast">
		<option>Peregian</option>
		<option>Caloundra</option>
		<option>Mapleton</option>
	</optgroup>
	<option>Canberra</option>
	<option>Perth</option>
	<option>Melbourne</option>
	<optgroup label="New Zealand">
		<option>Queenstown</option>
		<option>Blenheim</option>
	</optgroup>
</select>

<label>Time of day</label>
<!-- auto? -->
<select name="timeofday">
	<option>Dawn</option>
	<option>Morning</option>
	<option>Afternoon</option>
	<option>Dusk</option>
	<option>Evening</option>
</select>

<label>Time of year</label>
<!-- auto? -->
<select name="timeofyear">
	<option>Summer</option>
	<option>Autumn</option>
	<option>Winter</option>
	<option>Spring</option>
</select>

<label>Tags: content</label><input type="text" />

<label>Tags: people</label><input type="text" />

<label>Tags: composition</label><input type="text" />

<label>Tags: other</label><input name="tag" type="text" />

<input type="submit" name="submit" value="Add photo" />

<form>

</body>
</html>