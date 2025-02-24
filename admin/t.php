<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php if(isset($_POST)){print_r($_POST);}?>
<form method="post" action="">
	<label>XS</label>
<input type="checkbox" name="xs" value="1" >
	<label>S</label>
<input type="checkbox" name="s" value="2">
	<label>M</label>
<input type="checkbox" name="m" value="3">
	<label>L</label>
<input type="checkbox" name="l" value="4">
	<label>XL</label>
<input type="checkbox" name="xl" value="5">
	<label>XXL</label>
<input type="checkbox" name="xxl" value="6">
	<label>XXXl</label>
<input type="checkbox" name="xxxl" value="7" checked>
<button type="submit" name="save" value="1">Save</button>
</form>
</body>
</html>