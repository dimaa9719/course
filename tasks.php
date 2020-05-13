<?php 
  session_start(); 
?>
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
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
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
									
									<div class="login_button"><a href="index.php?logout='1'" ><i class="fa fa-sign-out"></i>&nbsp Logout</a></div>
                                    
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
									<li ><a href="index.php">Home</a></li>
									<li class="active"><a href="tasks.php">My Tasks</a></li>
									<li><a href="courses.php">Courses</a></li>									
									<li><a href="3a-calendar.php">Latest Events</a></li>
									<li><a href="contactUs.php">Contact Us</a></li>
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

	<div class="home" style="height: 0px;">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>My Tasks</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


	<!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div class="container" style="margin-top: 80px;">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title" style="width: max-content;">Welcome To Academy Education E-Learning</h2>
						<div class="section_subtitle"><p>You can see your Courses overview from here..</p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">
							
							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>My Courses</div></div>
									<div class="accordion_panel">

										<?php
											$username = ($_SESSION['user']['username']);
											$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
											$result = $mysqli->query("SELECT * FROM stu_course WHERE username = '$username' " ) or die($mysqli->error); 
										?>

											<ul class="list-group">
												<?php while($row = $result->fetch_assoc()): ?>

												<?php
													if (isset($_POST['view'])) {	
														$code = $_POST['code'];
														$category = $_POST['category'];
													}
												?>
												<form action="course_stu_view.php" method ="post">
													<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
													<input type="text" name="category" value="<?php echo $row['category']; ?>" style="display:none;" >
													<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
													<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
												</form>

												<?php endwhile; ?>
											</ul>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div> My Assignments</div></div>
									<div class="accordion_panel">

									<div class=" row">
										<div class="col-sm-10">
											
										</div>
										<div class="col-sm-2">
											<button class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="padding: 5px 10px;margin-top: -5px;" >Add Submission</button>
										</div>
									</div>
									<br>

										<?php
											$username = ($_SESSION['user']['username']);
											$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
															
											$result = $mysqli->query("SELECT * FROM assignment a, stu_course s WHERE a.course_code = s.course_code  AND s.username = '$username'" ) or die($mysqli->error);
										?>

									<table class="table table-striped" style="color:black;">
									<thead>
										<th>Course Name</th>
										<th>Uploaded Date</th>
										<th>Due Date</th>
										<th>Assignment</th>
										<th>Download Assignment</th>
										
									</thead>
									<tbody>
									<?php while($row = $result->fetch_assoc()): ?>	
											<tr>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['upload_date']; ?></td>
											<td><?php echo $row['due_date']; ?></td>
											<td><?php echo $row['file']; ?></td>
											<td><a class = "" href="tasks.php?file_id=<?php echo $row['id'] ?>"><i class="fa fa-download"></i> &nbsp; Download</a></td>
											</tr>
									<?php endwhile; ?>

									</tbody>
									</table>

									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Submissions</div></div>
									<div class="accordion_panel">

									<?php
											$username = ($_SESSION['user']['username']);
											$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
															
											$result = $mysqli->query("SELECT * FROM submission " ) or die($mysqli->error);
										?>

									<table class="table table-striped" style="color:black;">
									<thead>
										<th>Assignment</th>
										<th>Status</th>
										<th>Uploaded File</th>
										
										
									</thead>
									<tbody>
									<?php while($row = $result->fetch_assoc()): ?>	
											<tr>
											<td><?php echo $row['assignment']; ?></td>
											<td><i class="fa fa-check-square" style="color:green;"></i> &nbsp; Uploaded</td>
											<td><?php echo $row['file']; ?></td>
											</tr>
									<?php endwhile; ?>

									</tbody>
									</table>
									
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>My Grades</div></div>
									<div class="accordion_panel">
									<?php
											$username = ($_SESSION['user']['username']);
											$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
															
											$result = $mysqli->query("SELECT * FROM marks " ) or die($mysqli->error);
										?>

									<table class="table table-striped" style="color:black;">
									<thead>
										<th>Submission</th>
										<th>Marks(100)</th>
										<th>Grade</th>
										<th>Certificate</th>
										<th>Comments</th>
										
									</thead>
									<tbody>
									<?php while($row = $result->fetch_assoc()): ?>	
											<tr>
											<td><?php echo $row['file']; ?></td>
											<td><?php echo $row['mark']; ?></td>
											<td><span class="badge badge-primary"><?php echo $row['grade']; ?></span></td>
											<td><a class = "" href="./images/awardimage.jpg" download><i class="fa fa-download"></i> &nbsp; Download</a></td>
											<td><?php echo $row['comments']; ?></td>
											</tr>
									<?php endwhile; ?>

									</tbody>
									</table>
										<p style="visibility: hidden;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <h4>Upload Assignment</h4>
                <br><br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>

			<form method="post"  action="" enctype="multipart/form-data">
			
					<input type="text" value="<?php echo $_SESSION['user']['username']; ?>" name="username" style="display:none;">
                    
                    <label>Select the Assignment Name: </Label><br>
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="assign" id="assign" class="form-control" >
                        <?php
								
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));

                                $result1 = $mysqli->query("SELECT * FROM assignment a, stu_course s WHERE a.course_code = s.course_code  AND s.username = '$username' ") or die($mysqli->error);
						?>
                        <option value="">Select assignment</option>
                        <?php while($row = $result1->fetch_assoc()): ?>
                        <option value="<?php echo $row['file']; ?>"><?php echo $row['file']; ?></option>
                            
                        <?php endwhile; ?>
						</select>
					</div>
                      
                    <label>Upload Submission: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="sub_btn">
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
                <label>You file extension must be .doc, .pdf or .txt</label>

		
                      
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
										<div class="footer_logo_text">Academy <span>Edu</span></div>
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