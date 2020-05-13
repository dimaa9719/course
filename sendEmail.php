<?php

$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));

if(isset($_POST['submit2']))
{
	$name=$_POST['name'];
	$to=$_POST['lecturer'];    
	$subject = 'Student Inquiries';
	$msg=$_POST['message'];	
	$from=$_POST['student'];
	$headers="From: ".$from;
	
	ini_set( "SMTP", "smtp.gmail.com" ); 
	ini_set( "smtp_port",25);
	ini_set("auth_username","senali1996wijesekera@gmail.com");  
	ini_set("auth_password","dsw15730SLIIT");
	
	
	
	if(mail($to, $subject, $msg, $headers)){
			echo "
			<br><br><br>
			
			
			<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>
			
			<br><br><br>
			";
		}
		else{
			echo "Something went wrong!";
		}

}

if(isset($_POST["send"])){

	$message = $_POST['msg'];	
	$date = date("d/m/Y");
	$cDate = date('Y/m/d H:i:s');
	$currentDate = new DateTime($cDate);	
	$time = $currentDate->format('g:ia');
	
	$mysqli->query("INSERT INTO contact(message,date,time) VALUES ('$message','$date','$time')") or die(mysqli_error($mysqli)); 
	
	header('location: contactUs.php');

}


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['student'];
  $subject = 'Student Inquiries';
  $msg = $_POST['message'];
  ini_set( "SMTP", "smtp.gmail.com" ); 
ini_set( "smtp_port",25);
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1> Message </h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('kichcha96@gmail.com',$subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>

