<?php
//if(isset($_POST['submit'])){
//	$font = $_POST["font"];
//}
?>


<!DOCTYPE html>
<html>
<head>
<title>Project 2</title>

<style>
.text {

}

textarea {
	width: 600px;
	height: 120px;
	border: 3px solid #cccccc;
	padding: 5px;
	
	<?php
	
	if(isset($_POST['submit'])){
		echo "font-family: ";
		switch ($_POST["font"]) {
		case "times":
			echo "Times New Roman";
			break;
		case "sans":
			echo "sans-serif";
			break;
		case "arial":
			echo "arial";
			break;
		case "courier":
			echo "courier";
			break;
		}
		echo ";";
		echo "color: " . $_POST["font-color"] . ";";
		echo "background-color: " . $_POST["background-color"] . ";";
		echo "font-size: " . ($_POST["font-size"] * 2) . "px;";
		
	}
	?>;
	
}
 
</style>

</head>

<body>

<div class = "text">
	<textarea rows="4" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
</div>

<h1>Style Options</h1>

<form method = "POST">
	<h2>Font</h2>
	<select name="font">
		<option value="times">Times New Roman</option>
		<option value="sans">Sans-Serif</option>
		<option value="arial">Arial</option>
		<option value="courier">Courier New</option>
	</select>
	
	<h2>Font Size (Between 8 and 20)<h3>
	<!--<input type="number" name="quantity" min="8" max="24">-->
	8<input type="range" name="font-size" min="4" max="12">24
	
	<h2>Font Color</h2>
	<select name="font-color">
		<option value="black">black</option>
		<option value="red">red</option>
		<option value="blue">blue</option>
		<option value="green">green</option>
		<option value="orange">orange</option>
	</select>
	
	<h2>Background Color</h3>
	<select name="background-color">
		<option value="white">white</option>
		<option value="Beige">beige</option>
		<option value="Gainsboro">light gray</option>
		<option value="GreenYellow">green-yellow</option>
		<option value="MistyRose">light pink</option>
	</select>
	<br><br>
	<input type="submit" value="submit" name = "submit">

</form>







</body>
</html>