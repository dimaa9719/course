<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin panel</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	
</head>
<body style="color:#3f3f3f;">

<div class="super_container">

	<!-- Header -->

	<header class="header">
    <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" style="text-align:center;">
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
	<?php endif ?>
	<?php  if (isset($_SESSION['user'])) : ?>
    	<div class="top_bar" style="height: 72%;">
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
									<li class="active"><a href="home.php">Home</a></li>
									<li><a href="add_assignment.php">Assignments</a></li>
									<li><a href="add_course.php">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
									<!-- Notification Content-->
									<li class="dropdown">
									   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										   <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
										   <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span>
									   </a>
									   <ul class="dropdown-menu"></ul>
									</li>
									 
								</ul>
								
								<!--<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
									
								 Hamburger 

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div> -->
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



	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div style="margin-top: -40px;">

		<?php
								
			$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
            $result1 = $mysqli->query("SELECT * FROM development ") or die($mysqli->error);
            $result2 = $mysqli->query("SELECT * FROM engineering ") or die($mysqli->error);
            $result3 = $mysqli->query("SELECT * FROM business ") or die($mysqli->error);
            $result4 = $mysqli->query("SELECT * FROM design ") or die($mysqli->error);
            $result5 = $mysqli->query("SELECT * FROM photography ") or die($mysqli->error);
            $result6 = $mysqli->query("SELECT * FROM music ") or die($mysqli->error);  
		?>

	<div class="page-wrapper">
    
        <div class="content" style="padding: 15px;">

        <div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
				<?php
						
						$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
						$col1 = $mysqli->query("SELECT count(id) AS Total FROM user WHERE user_type='user'" ) or die($mysqli->error);
						$col2 = $mysqli->query("SELECT count(id) AS Total FROM assignment" ) or die($mysqli->error); 
						$c1 = $mysqli->query("SELECT count(course_id) AS Total FROM business" ) or die($mysqli->error); 
						$c2 = $mysqli->query("SELECT count(id) AS Total FROM development" ) or die($mysqli->error); 
						$c3 = $mysqli->query("SELECT count(course_id) AS Total FROM engineering" ) or die($mysqli->error); 
						$c4 = $mysqli->query("SELECT count(course_id) AS Total FROM music" ) or die($mysqli->error); 
						$c5 = $mysqli->query("SELECT count(course_id) AS Total FROM photography" ) or die($mysqli->error); 
						$c6 = $mysqli->query("SELECT count(course_id) AS Total FROM design" ) or die($mysqli->error); 
						$row1 = $col1->fetch_assoc();
						$row2 = $col2->fetch_assoc();
						$r1 = $c1->fetch_assoc();
						$r2 = $c2->fetch_assoc();
						$r3 = $c3->fetch_assoc();
						$r4 = $c4->fetch_assoc();
						$r5 = $c5->fetch_assoc();
						$r6 = $c6->fetch_assoc();
						$courses = $r1['Total'] + $r2['Total'] + $r3['Total'] + $r4['Total'] + $r5['Total'] + $r6['Total'];
				?>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
								<h2 class="m-b-5 " style="color: white;font-family:inherit;"><?php echo $courses; ?></h2>
                                <div class="m-b-5">COURSES</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">					
								<h2 class="m-b-5 " style="color: white;font-family:inherit;"><?php echo $row1['Total']; ?></h2>
                                <div class="m-b-5">ASSIGNMENS</div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
								<h2 class="m-b-5 " style="color: white;font-family:inherit;">Rs.10,500</h2>				
                                <div class="m-b-5">TOTAL INCOME</div><i class="fa fa-money widget-stat-icon"></i>
								<div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
								<h2 class="m-b-5 " style="color: white;font-family:inherit;"><?php echo $row1['Total']; ?></h2>
                                <div class="m-b-5">USERS</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>22% higher</small></div>
                            </div>
                        </div>
                    </div>
				</div>
				<br/>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div>
                                        <h3 class="m-0" style="font-family:inherit;">Statistics</h3>
                                        <div>Courses sales analytics</div>
                                    </div>
                                    <div class="d-inline-flex">
                                        <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                            <div class="text-muted">MONTHLY INCOME</div>
                                            <div>
                                                <span class="h2 m-0">Rs. 2800</span>
                                                <span class="text-success ml-2"><i class="fa fa-level-up"></i> +25%</span>
                                            </div>
                                        </div>
                                        <div class="px-3">
                                            <div class="text-muted">WEEKLY SALES</div>
                                            <div>
                                                <span class="h2 m-0">240</span>
                                                <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -12%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <canvas id="bar_chart" style="height:260px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-head">
								<div class="ibox-title">Courses Statistics</div>
								
                            </div>
                            <div class="ibox-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <canvas id="doughnut_chart" style="height:160px;"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="m-b-10 text-danger"><i class="fa fa-circle-o m-r-10"></i>Viewed 52%</div>
                                        <div class="m-b-10 text-info"><i class="fa fa-circle-o m-r-10"></i>Enrolled 27%</div>
                                        <div class="m-b-10 text-warning"><i class="fa fa-circle-o m-r-10"></i>Assignments 21%</div>
                                    </div>
								</div>
								<br/>
                                <ul class="list-group list-group-divider list-group-full">
                                    <li class="list-group-item">Computing Courses
                                        <span class="float-right text-success"> <?php echo $r2['Total']; ?></span>
                                    </li>
                                    <li class="list-group-item">Engineering Courses
                                        <span class="float-right text-danger"> <?php echo $r3['Total']; ?></span>
                                    </li>
                                    <li class="list-group-item">Business Courses
                                        <span class="float-right text-success"><?php echo $r1['Total']; ?></span>
									</li>
									<li class="list-group-item">Music Courses
                                        <span class="float-right text-danger"> <?php echo $r4['Total']; ?></span>
                                    </li>
                                    <li class="list-group-item">Photography Courses
                                        <span class="float-right text-success"> <?php echo $r5['Total']; ?></span>
                                    </li>
                                    <li class="list-group-item">Design Courses
                                        <span class="float-right text-danger"> <?php echo $r6['Total']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
				<?php
					$username = ($_SESSION['user']['username']);
					$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
					$result = $mysqli->query("SELECT * FROM user WHERE user_type='admin' AND username != 'manager' " ) or die($mysqli->error); 
				?>
                    <div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Lectures List</div>
                                <div class="ibox-tools">
								<div>
									<a href="create_userM.php" class="btn btn-primary" style="padding: 3px 8px;font-size: 15px;color:white;">Add New User</a>
								</div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
									<th>Name</th>
									<th>Email Address</th>
                                    </thead>
                                    <tbody>
									<?php while($row = $result->fetch_assoc()): ?>
									<tr>
										<td><?php echo $row['username']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td>
											<span class="badge badge-success">Registed</span>
										</td>
									</tr>
									<?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
					<?php
							$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
							$result = $mysqli->query("SELECT * FROM rate") or die($mysqli->error); 
												
							$count =  $mysqli->query("SELECT count(rate_id) AS num FROM rate") or die($mysqli->error);
							$ratings = $count->fetch_assoc();
							$numRatings = $ratings['num'];
							$c = 0;

					?>
                        <div class="ibox">
                            <div class="ibox-head">
								<div class="ibox-title">Reviews</div>
								<div class="ibox-title float-right">
									<span class="badge badge-success"><?php echo $numRatings; ?></span>
								</div>

                            </div>
                            <div class="ibox-body">
							<ul class="media-list media-list-divider m-0">
							<?php while($row = $result->fetch_assoc() and $c <= 3): ?>
                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
										<img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                                        </a>
                                        <div class="media-body">
                                            <div class="media-heading">
												<a href="#"><?php echo $row['course_code']; ?></a>
                                                <span class="font-16 float-right"><?php echo $row['rate']; ?>/5</span>
											</div>
											<div class="media-heading">
												<a href="#" style="color:#3f3f3f;"><?php echo $row['reviewer']; ?></a>
												<span class="font-13 float-right"><?php echo $row['date']; ?></span>
											</div>
                                            <div class="font-13"><?php echo $row['comment']; ?></div>
                                        </div>
									</li>
							<?php $c++;  ?>
							<?php endwhile; ?>	
                                    
                            </ul>
							</div>
							<div class="ibox-footer text-center">
                                <a href="javascript:;">View All Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
				<?php
						$username = ($_SESSION['user']['username']);
						$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
						$result = $mysqli->query("SELECT * FROM user WHERE user_type='user' " ) or die($mysqli->error); 
				?>
				<div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Student List</div>
                                <div class="ibox-tools">
								<div>
									<a href="create_userM.php" class="btn btn-primary" style="padding: 3px 8px;font-size: 15px;color:white;">Add New User</a>
								</div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
									<th>Name</th>
									<th>Email Address</th>
                                    </thead>
                                    <tbody>
									<?php while($row = $result->fetch_assoc()): ?>
									<tr>
										<td><?php echo $row['username']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td>
											<span class="badge badge-success">Registed</span>
										</td>
										<td> </td>
									</tr>
									<?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
						<?php
						
							$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
														
							$result1 = $mysqli->query("SELECT count(id) As Best FROM stu_course " ) or die($mysqli->error); 
							$result2 = $mysqli->query("SELECT max(username) As Best FROM stu_course   " ) or die($mysqli->error); 
							$row1 = $result1->fetch_assoc();
							$row2 = $result2->fetch_assoc();
						?>

                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Best User</div>
                            </div>
                            <div class="ibox-body ">
                                <div class="row">
									<div class="col-lg-5 text-center">
										<img class="img-circle" style="height: 75%;" src="./assets/img/users/u3.jpg" />
									</div>
									<div class="col-lg-4">
										<h5 class=" m-b-10 m-t-10" style="font-size: x-large;font-family:inherit;"><?php echo $row2['Best']; ?></h5>
										<div class="m-b-20 text-muted">Student</div>
									</div>
								</div>

								<ul class="media-list  ">
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a  href="javascript:;">Courses</a>
                                                <span class="font-16 float-right"><?php echo $row1['Best']; ?></span>
                                            </div>
                                            <div class="font-13">Enrolled courses from the Website..</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a  href="javascript:;">Spent</a>
                                                <span class="font-16 float-right">Rs. 4580</span>
                                            </div>
                                            <div class="font-13">Amount that spent for courses</div>
                                        </div>
                                    </li>
                                    
                                </ul>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            
                
            </div>
            <!-- END PAGE CONTENT-->
            
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
											<div class="footer_logo_text">Academy<span>Edu</span></div>
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

    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetchNotifications.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification(); 

 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
<style>
    .visitors-table tbody tr td:last-child {
        display: flex;
        align-items: center;
    }

    .visitors-table .progress {
        flex: 1;
    }

    .visitors-table .progress-parcent {
        text-align: right;
        margin-left: 10px;
    }
</style>
</body>
</html>