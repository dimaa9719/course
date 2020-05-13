
<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
  
    	<?php  if (isset($_SESSION['user'])) : ?>
        <div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li style=""><div class="question" style="font-size: 17px;">Welcome! </div></li>
									<li>
										<i class="fa fa-user" aria-hidden="true" style="font-size: 17px;"></i>
										<div style="font-size: 17px;"><?php echo $_SESSION['user']['username']; ?></div>
									</li>
									
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li class="login_button">
											<a href="index.php?logout='1'" ><i class="fa fa-sign-out" style="color:black;"></i>&nbsp Logout</a>
										</li>
										<?php  if (($_SESSION['user']['user_type']) == 'admin' && ($_SESSION['user']['username']) != 'manager') : ?>
										<li class="login_button">
											<a href="create_user.php" id="myBtn"><i class="fa fa-user-plus" style="color:black;"></i>&nbsp Add User</a></div>
										</li>
										<?php endif ?>	
									</ul>	
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
		<?php endif ?>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
								<a href="#">
								<div class="logo_text">Academy <span>Education</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
							<ul class="main_nav">
							<?php  if (($_SESSION['user']['user_type']) == 'admin'  && ($_SESSION['user']['username']) != 'manager') : ?>
									<li ><a href="home.php">Home</a></li>
									<li class="active"><a href="add_assignment.php">Assignments</a></li>
									<li ><a href="add_course.php">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
							<?php endif ?>
							<?php  if (($_SESSION['user']['user_type']) == 'admin' && ($_SESSION['user']['username']) == 'manager') : ?>
									<li ><a href="manager_home.php">Home</a></li>
									<li class="active"><a href="add_assignment.php">Assignments</a></li>
									<li><a href="add_course.php">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
							<?php endif ?>	
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
									
								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">About</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Courses</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- <div class="alert alert-success">
    	<strong>Success!</strong> This alert box could indicate a successful or positive action.
		<button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="alert">&times;</button>
  	</div> -->

	  <?php if (isset($_SESSION['success'])) : ?>
	  	<div class="alert alert-success">
	  		<strong>Success!
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
			</strong>
			<button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="alert">&times;</button>
		</div>
	<?php endif ?>
	<!-- Feature -->
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
	<?php endif ?>

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div class="container" style="margin-top: -40px;">
	
				<!-- Feature Content -->
				<div class="">
					<div class="feature_content">
                    <div class="row feature_row">
                            
                            <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result1 = $mysqli->query("SELECT * FROM development ") or die($mysqli->error);
                                $result2 = $mysqli->query("SELECT * FROM engineering ") or die($mysqli->error);
                                $result3 = $mysqli->query("SELECT * FROM business ") or die($mysqli->error);
                                $result4 = $mysqli->query("SELECT * FROM design ") or die($mysqli->error);
                                $result5 = $mysqli->query("SELECT * FROM photography ") or die($mysqli->error);
                                $result6 = $mysqli->query("SELECT * FROM music ") or die($mysqli->error);  
							?>
                        <!-- Accordions -->
                        <div class="accordions">
                        <div class="elements_accordions">

                        <div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center active"><div> Assignments </div></div>
							<div class="accordion_panel">
                            
                            <?php
								$username = ($_SESSION['user']['username']);
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$result = $mysqli->query("SELECT * FROM assignment" ) or die($mysqli->error); 
							?>

							<table class="table table-striped" style="color:black;">
							<thead>
								<th>Course Name</th>
								<th>Uploaded Date</th>
								<th>Due Date</th>
								<th>Assignment</th>
								
							</thead>
							<tbody>
							<?php while($row = $result->fetch_assoc()): ?>
								<tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['upload_date']; ?></td>
								<td><?php echo $row['due_date']; ?></td>
								<td><?php echo $row['file']; ?></td>
							
								</tr>
								<?php endwhile; ?>

							</tbody>
							</table>
							
							
                      

							</div>
						</div>

                        <div class="accordion_container">
						<br>
                           <div class=" row">
                                <div class="col-sm-10">
                                    <h4 >Add Assignments</h4>
                                </div>
                                <div class="col-sm-2">
                                  
                                </div>
                            </div>
                            <br>
                                <div class="container">

                                    <ul class="nav nav-pills " style="font-size: 17px;font-weight: 400;">
                                        <li class="active"><a data-toggle="tab" href="#home">Computing</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Engineering</a></li>
                                        <li><a data-toggle="tab" href="#menu2">Business</a></li>
                                        <li><a data-toggle="tab" href="#menu3">Designing</a></li>
                                        <li><a data-toggle="tab" href="#menu4">Photography</a></li>
                                        <li><a data-toggle="tab" href="#menu5">Music</a></li>
                                    </ul>

                            <div class="tab-content">
                           
                                <div id="home" class="tab-pane fade in active">
                                    <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Computing Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>

                                        <?php while($row = $result1->fetch_assoc()): ?>
                                        
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal6" style="float:right;padding: 5px 10px;margin-top: -5px;"> <i class="fa fa-file-text"></i> &nbsp; Add</button></a>
										
										<?php endwhile; ?>
									</ul>
                                </div>

                                <div id="menu1" class="tab-pane fade">
                                <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Engineering Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>
										<?php while($row = $result2->fetch_assoc()): ?>

                                        <a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal2" style="float:right;padding: 5px 10px;margin-top: -5px;"><i class="fa fa-file-text"></i> &nbsp; Add</button></a>

										<?php endwhile; ?>
									</ul>
                                
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Business Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>
										<?php while($row = $result3->fetch_assoc()): ?>

                                        <a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal3" style="float:right;padding: 5px 10px;margin-top: -5px;"><i class="fa fa-file-text"></i> &nbsp; Add</button></a>

										<?php endwhile; ?>
									</ul>
                                
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Designing Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>
										<?php while($row = $result4->fetch_assoc()): ?>

                                        <a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal4" style="float:right;padding: 5px 10px;margin-top: -5px;"><i class="fa fa-file-text"></i> &nbsp; Add</button></a>

										<?php endwhile; ?>
									</ul>
                                
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Photography Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>
										<?php while($row = $result5->fetch_assoc()): ?>

                                        <a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal5" style="float:right;padding: 5px 10px;margin-top: -5px;"><i class="fa fa-file-text"></i> &nbsp; Add</button></a>

										<?php endwhile; ?>
									</ul>
                                
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                <br>
                                    <ul class="list-group">
                                        <div class=" row">
                                            <div class="col-sm-10">
                                                <h4 > Music Courses Overview</h4>
                                            </div>
                                        </div>
                                    <br>
										<?php while($row = $result6->fetch_assoc()): ?>

                                        <a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )</b> 
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal6" style="float:right;padding: 5px 10px;margin-top: -5px;"><i class="fa fa-file-text"></i> &nbsp; Add</button></a>

										<?php endwhile; ?>
									</ul>
                               
                                </div>
                            </div>
						</div>
						
                        
						</div>
						<div class="accordion_container">
						
							<div class="accordion d-flex flex-row align-items-center active"><div>Grade Submissions </div>
							</div>
							
							
							<div class="accordion_panel">
                            
                            <?php
								$username = ($_SESSION['user']['username']);
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$result = $mysqli->query("SELECT * FROM marks" ) or die($mysqli->error); 
							?>

							<table class="table table-striped" style="color:black;">
							<thead>
								<th>Student Name</th>
								<th>Uploaded file</th>
								<th></th>
								<th>Marks(100)</th>
								<th>Grade</th>
								<th>Comments</th>
								<th> <a class="btn btn-success" id="edit" data-toggle="modal" data-target="#grade" style="color:white;padding: 5px 10px;margin-top: -5px;">&nbsp; Add marks</a></th>
								
							</thead>
							<tbody>
							<?php while($row = $result->fetch_assoc()): ?>
								<tr>
								<td><?php echo $row['student']; ?></td>
								<td><?php echo $row['file']; ?></td>
								<td><a class = "" href="tasks.php?file_id=<?php echo $row['id'] ?>"><i class="fa fa-download"></i> &nbsp; Download</a></td>
								<td><?php echo $row['mark']; ?></td>
								<td><?php echo $row['grade']; ?></td>
								<td><?php echo $row['comments']; ?></td>
								<td></td>
								
							
								</tr>
								<?php endwhile; ?>

							</tbody>
							</table>
							
							
                      

							</div>
						</div>

						</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				
			</div>
		</div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal1" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Computing Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result1 = $mysqli->query("SELECT * FROM development ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result1->fetch_assoc()): ?>
                        <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>
                            
                        <?php endwhile; ?>
						</select>
					</div>

					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result1 = $mysqli->query("SELECT * FROM development ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result1->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>
                    

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>





<!-- Modal -->
<div class="modal fade" id="modal2" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Engineering Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));

                                $result2 = $mysqli->query("SELECT * FROM engineering ") or die($mysqli->error);
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result2->fetch_assoc()): ?>
                        <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
					
					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result1 = $mysqli->query("SELECT * FROM engineering ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result1->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>
                    

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>






<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Business Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result3 = $mysqli->query("SELECT * FROM business ") or die($mysqli->error);
 
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result3->fetch_assoc()): ?>
                            <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>          
                        <?php endwhile; ?>
						</select>
					</div>
					
					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result3 = $mysqli->query("SELECT * FROM business ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result3->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>






<!-- Modal -->
<div class="modal fade" id="modal4" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Design Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result4 = $mysqli->query("SELECT * FROM design ") or die($mysqli->error);
                                 
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result4->fetch_assoc()): ?>
                        <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
					
					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result4 = $mysqli->query("SELECT * FROM design ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result4->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>
                    

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>





<!-- Modal -->
<div class="modal fade" id="modal5" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Photography Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result5 = $mysqli->query("SELECT * FROM photography ") or die($mysqli->error);
                                 
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result5->fetch_assoc()): ?>
                        <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
					
					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result5 = $mysqli->query("SELECT * FROM photography ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result5->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>
                    

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>




<!-- Modal -->
<div class="modal fade" id="modal6" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add an Assignment</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

            <form method="post"  action="" enctype="multipart/form-data">
                    
                    <label>Select the Music Course: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result6 = $mysqli->query("SELECT * FROM music ") or die($mysqli->error);  
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result6->fetch_assoc()): ?>
                        <option value="<?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)"><?php echo $row['name']; ?>(<?php echo $row['course_code']; ?>)</option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
					
					<label>Select the Course Code: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="code" id="code" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result6 = $mysqli->query("SELECT * FROM music ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the course</option>
                        <?php while($row = $result6->fetch_assoc()): ?>
                        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
                    </div>
                    

                    <label>Uploaded Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="upload" required="required"> 
                    </div>

                    <label>Due Date: </Label><br>
					<div class="form-group">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="due"  required="required">					
                      </div>
                      
                    <label>Upload Assignment File: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="upload_btn" >
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
	</div>
	

	<div class="modal fade" id="grade" role="dialog">


        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Add Grades</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

					
			<form method="post"  action="" enctype="multipart/form-data">
			
				<label>Select the Student Name: </Label><br>
                    <div class="form-group">
					<i class="fa fa-address-book"></i>
						<select name="name" id="name" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result6 = $mysqli->query("SELECT username FROM submission ") or die($mysqli->error);
                               
						?>
                        <option value="">Select the name</option>
                        <?php while($row = $result6->fetch_assoc()): ?>
                        <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
					</div>

					<label>Select Submission File: </Label><br>
                    <div class="form-group">
					<i class="fa fa-file-text-o"></i>
						<select name="sub" id="sub" class="form-control" >
						<?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
                                $result6 = $mysqli->query("SELECT file FROM submission") or die($mysqli->error);
                               
						?>
                        <option value="">Select the file</option>
                        <?php while($row = $result6->fetch_assoc()): ?>
                        <option value="<?php echo $row['file']; ?>"><?php echo $row['file']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
					
                    <label>Marks(100): </Label><br>
					<div class="form-group">
						<i class="fa fa-edit"></i>
						<input type="text" class="form-control" name="mark" required="required"> 
                    </div>

                    <label>Grade: </Label><br>
					<div class="form-group">
						<i class="fa fa-gift"></i>
						<input type="text" class="form-control"  name="grade"  required="required">					
                    </div>
                      
					<label>Comments: </Label><br>
					<div class="form-group">
						<i class="fa fa-file-text-o"></i>
						<input type="text" class="form-control"  name="comment"  required="required">					
                    </div>  

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="edit_btn" >
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
            </div>
        </div>
        
        </div>
    </div>



	<div class="modal fade" id="noti" role="dialog">


        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <label>You file extension must be .docx, .pdf or .txt</label>

		
                      
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                    </div>
              	
            </div>
        </div>
        
        </div>
	</div>
	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Unic<span>at</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: Info.deercreative@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 New York City, United States</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="courses.html">Courses</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
<style>
    .modal-login {
        margin-top: 75px;
		color: #636363;
		width: 377px;
	}
	.modal-login .modal-content {
        width: 500px;
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		margin-top: 16px;
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}


	

    
</style>
</body>
</html>