<!DOCTYPE html>
<html>

<head>
	<title>Photo manager | Curagrapher</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

<header>
	<div class="inner">Curagrapher</div>
</header>

<form action="upload-image.php" method="POST" enctype="multipart/form-data">

<!-- thumbnail preview -->

<fieldset>
	<legend>1. Locate</legend>

	<!--<label>Category</label>
	<select name="category">
		<option>Landscape</option>
		<option>Buildings</option>
		<option>People</option>
	</select>-->

	<label>location</label>
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

	<label>time of day</label>
	<!-- auto? -->
	<select name="timeofday">
		<option>Dawn</option>
		<option>Morning</option>
		<option>Afternoon</option>
		<option>Dusk</option>
		<option>Evening</option>
	</select>

	<label>time of year</label>
	<!-- auto? -->
	<select name="timeofyear">
		<option>Summer</option>
		<option>Autumn</option>
		<option>Winter</option>
		<option>Spring</option>
	</select>
</fieldset>

<fieldset class="tags">
	<legend>2. Describe</legend>
	<label>content</label><input type="text" />
	<label>people</label><input type="text" />
	<label>composition</label><input type="text" />
	<label>other</label><input name="tag" type="text" />
</fieldset>

<fieldset>
	<legend>3. Upload</legend>
	<input type="file" name="file" id="file" value="choose file" />
	<input type="submit" name="submit" value="Add image" />
</fieldset>

<form>

</body>
</html>