<?php

$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));

if(isset($_POST["submitReview"])){

	$name = $_POST['name'];	
	$course = $_POST['course_rate'];
	$date = date("d/m/Y");
	$comment = $_POST['comment'];
	$userType = $_POST["optradio"];
	
	
	$radioVal = $_POST["star"];
	$rate=0;

	if($radioVal == "1")
	{
		$rate=1;
	}
	else if ($radioVal == "2")
	{
		$rate=2;
	}
	else if ($radioVal == "3")
	{
		$rate=3;
	}
	else if ($radioVal == "4")
	{
		$rate=4;
	}
	else if ($radioVal == "5")
	{
		$rate=5;
	}
    	
	
	$mysqli->query("INSERT INTO rate(course_code,reviewer,user_type,rate,comment,date) VALUES ('$course','$name','$userType','$rate','$comment','$date')") or die(mysqli_error($mysqli)); 
	
	header('location: courses.php');

}

?>