<!DOCTYPE htm>
<html>
<head>
<link href="calender.css" rel="stylesheet" type="text/css" />
<title>Calender</title>
</head>
<?php
$hours_to_show;
$users;
$calenderTime;
if($_POST == null){
	$hours_to_show = 12;
	$users = 3;
	
	//echo "welcome";

}
else{
	$hours_to_show = $_POST["hoursToShow"];
	$users = $_POST["user"];
	//echo "welcome again";
}
function get_hour_string($hours){
	for($i=0; $i<=$hours; $i++)	{	
		date_default_timezone_set('Europe/London');
		 $calenderTime[$i] = date_default_timezone_set("h A",(time()+(60*60*$i)));
		 $calenderTime[$i] = date_default_timezone_set("h A",(time()+(60*60*$i)));
		//echo $calenderTime[$i];
	}
	return $calenderTime;
}
?>

<body>
<h1 align="center">Calendar</h1>
<strong>
<p align="center"><?php echo(date("l F dS\, Y h:i A")); ?></p></strong>
<form action="calender.php" method="post">
<br />
Hours to show:
<input type="number" name="hoursToShow" />
No. of Users:
<input type="number" name="user" />
<input type="submit" value="set" />
<br />

<div align="center">

<table width="54%" border="1" class="altColor">
	<tr>
		<th>Time:</th>
		<?php
		for($j=0; $j<$users; $j++)
			echo "<th>User: ".($j+1)."</th>";
			echo "</tr>";	
	$construct=get_hour_string($hours_to_show);
	$size = sizeof($construct)-1;
		for($i=0; $i<$size; $i++){
			echo "<tr>";
			echo"<th>". $construct[$i]." to ". $construct[$i+1]."</th>";
		for($j=0; $j<$users; $j++)
			echo "<td>&nbsp;&nbsp;</td>";	
			echo "</tr>";
}
?>

</table>
</div>

<p><a href="assignments.html">Assignments</a> | 
<a href="index.html"> Home Page </a> </p>
</body>
</html>