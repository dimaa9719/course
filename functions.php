<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'course');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

if (isset($_POST['add_btn'])) {
	addCourse();
}

if (isset($_POST['pay_btn'])) {
	enroll();
}

if (isset($_POST['pay_btn1'])) {
	enroll1();
}

if (isset($_POST['pay_btn2'])) {
	enroll2();
}

// for designing
if (isset($_POST['pay_btn3'])) {
	enroll3();
}

// for photography
if (isset($_POST['pay_btn4'])) {
	enroll4();
}

// for music
if (isset($_POST['pay_btn5'])) {
	enroll5();
}

if (isset($_POST['upload_btn'])) {
	addAssignment();
}

if (isset($_POST['sub_btn'])) {
	addSubmission();
}

if (isset($_POST['edit_btn'])) {
	addGrade();
}



// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['mp4', 'pdf', 'txt'])) {
        echo "You file extension must be .mp4, .pdf or .txt";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM assignment a, stu_course s WHERE a.course_code = s.course_code  AND id=$id";
    $result = mysqli_query($db, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $file['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload/' . $file['file']));
        readfile('upload/' . $file['file']);

        // Now update downloads count

        exit;
    }

}



// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO user (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
		
		}else{
			$query = "INSERT INTO user (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
							
		}
	}
}


function addAssignment(){

	$db = mysqli_connect('localhost', 'root', '', 'course');

	$category 		=  e($_POST['category']);
	$upload 		=  e($_POST['upload']);
	$due			=  e($_POST['due']);
	$code           =  e($_POST['code']);

	$filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];
	
	if (!in_array($extension, ['docx', 'pdf', 'txt'])) {
        echo "You file extension must be .docx, .pdf or .txt";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO assignment (name,course_code,upload_date,due_date,file, size) VALUES ('$category','$code','$upload','$due','$filename', $size)";
            if (mysqli_query($db, $sql)) {
                echo "Assignment uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }

}



function addGrade(){

	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name   =  e($_POST['name']);
	$sub  =  e($_POST['sub']);
	$mark  =  e($_POST['mark']);
	$grade = e($_POST['grade']);
	$comment = e($_POST['comment']);

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO marks (student,file, mark,grade,comments) 
					  VALUES('$name','$sub', '$mark','$grade','$comment')";
			mysqli_query($db, $query);
		
	}

}



function addSubmission(){

	$db = mysqli_connect('localhost', 'root', '', 'course');

	$username 		=  e($_POST['username']);
	$assign		=  e($_POST['assign']);


	$filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'submit/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
	
	
	if (!in_array($extension, ['docx', 'pdf', 'txt'])) {
        echo "You file extension must be .docx, .pdf or .txt";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO submission (username,assignment,file) VALUES ('$username','$assign','$filename')";
            if (mysqli_query($db, $sql)) {
                echo "Assignment uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }

}



// ADD COURSE
function addCourse(){
	$db = mysqli_connect('localhost', 'root', '', 'course');
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	$filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'task/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$course_code    =  e($_POST['course_code']);
	$course_name    =  e($_POST['name']);
	$description    =  e($_POST['description']);
	$price          =  e($_POST['price']);
	$category 		=  e($_POST['category']);
	
	
	// form validation: ensure that the form is correctly filled
	if (empty($course_code )) { 
		array_push($errors, "Course code is required"); 
	}
	if (empty($course_name)) { 
		array_push($errors, "Course code is required"); 
	}
	if (empty($description)) { 
		array_push($errors, "Description is required"); 
	}
	if (empty($price)) { 
		array_push($errors, "Price is required"); 
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		if($_POST['category'] == 'development'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO development (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}
		}else if($_POST['category'] == 'business'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO business (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}	

		}else if($_POST['category'] == 'engineering'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO engineering (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}

		}else if($_POST['category'] == 'design'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO design (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}

		}else if($_POST['category'] == 'photography'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO photography (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}

		}else if($_POST['category'] == 'music'){

			if (!in_array($extension, ['mp4', 'avi', 'mkv'])) {
				echo "You file extension must be .mp4, .pdf or .txt";
			}else {
				
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO music (course_code,name,description,price,file,size,downloads) 
					VALUES('$course_code', '$course_name', '$description', '$price','$filename', $size, 0)";
					
					if (mysqli_query($db, $sql)) {
						echo "Assignment uploaded successfully";
					}
				} else {
					echo "Failed to upload file.";
				}
			}			
		}
	}


}


// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin' && $username == 'manager') {
				$_SESSION['user'] = $logged_in_user;
				header('location: manager_home.php');		  
			}
			else if ($logged_in_user['user_type'] == 'admin') {
				$_SESSION['user'] = $logged_in_user;
				header('location: home.php');		  
			}
			else{
				$_SESSION['user'] = $logged_in_user;
				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}


// enroll to course
function enroll(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'development';	
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled to the course!";
			header('location: engineering.php');
	}
}

function enroll1(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'development';	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled ro the course!";
			header('location: computing.php');
	}
}

function enroll2(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'business';
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled ro the course!";
			header('location: business.php');
	}
}

function enroll3(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'design';

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled ro the course!";
			header('location: designing.php');
	}
}

function enroll4(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'photography';

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled ro the course!";
			header('location: photography.php');
	}
}

function enroll5(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $course_name, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username   =  e($_SESSION['user']['username']);
	$course_code  =  e($_POST['code']);
	$name  =  e($_POST['course_name']);
	$category = 'music';

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO stu_course (username,course_code, name,category) 
					  VALUES('$username','$course_code', '$name','$category')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Successfully enrolled ro the course!";
			header('location: music.php');
	}
}

