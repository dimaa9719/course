
<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
										<div style="font-size: 17px;">Visitor</div>
									</li>
									
								</ul>
								<div class="top_bar_login ml-auto">									
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										
										<li class="login_button">
											<a href="index.php?logout='1'" ><i class="fa fa-sign-out" style="color:black;"></i>&nbsp LogIn</a>
										</li>
										<li class="login_button">
											<a href="index.php?logout='1'" ><i class="fa fa-user-plus" style="color:black;"></i>&nbsp Register</a>
										</li>
										
									</ul>	
                                    </div>                                    
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
		
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
									<li ><a href="visitor_home.php">Home</a></li>									
									<li class="active"><a href="visitor_courses.php">Courses</a></li>
									<li><a href="AboutUs.php">About Us</a></li>									
									
																	 
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

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						
						<form  id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start" method="get">
							<select id="courses_search_select" class="courses_search_select courses_search_input" name="select" onchange="myChangeHandler.apply(this)" style="width: 500px;">
								<option>All Categories</option>
								<option value=computing.php>Computing</option>
								<option value=engineering.php>Engineering</option>
								<option value=business.php>Business Management</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto" name="redirect">search now</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							
							<!-- Computing Courses -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$result = $mysqli->query("SELECT * FROM development") or die($mysqli->error); 
								$count = 0;	
												
							?>
							<?php while($row = $result->fetch_assoc() and $count <= 1 ): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/online.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="computing.php"><?php echo $row['name']; ?></a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p><?php echo $row['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $row['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>

							<!-- Course -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$results = $mysqli->query("SELECT * FROM business") or die($mysqli->error);
								$count = 0;	
							?>
							<?php while($rows = $results->fetch_assoc() and $count <= 1): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_5.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="business.php"><?php echo $rows['name']; ?></a></h3>
										<div class="course_teacher">Ms. Lucius</div>
										<div class="course_text">
											<p><?php echo $rows['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $rows['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>

							<!-- Course -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$resultx = $mysqli->query("SELECT * FROM engineering") or die($mysqli->error); 
								$count = 0;	
							?>
							<?php while($rowx = $resultx->fetch_assoc() and $count <= 1): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/online2.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="engineering.php"><?php echo $rowx['name']; ?></a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p><?php echo $rowx['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $rowx['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>	

								<!-- Course -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$resultx = $mysqli->query("SELECT * FROM design") or die($mysqli->error); 
								$count = 0;	
							?>
							<?php while($rowx = $resultx->fetch_assoc() and $count <= 1): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/online6.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="designing.php"><?php echo $rowx['name']; ?></a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p><?php echo $rowx['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $rowx['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>	
							
								<!-- Course -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$resultx = $mysqli->query("SELECT * FROM photography") or die($mysqli->error); 
								$count = 0;	
							?>
							<?php while($rowx = $resultx->fetch_assoc() and $count <= 1): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/online4.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="photography.php"><?php echo $rowx['name']; ?></a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p><?php echo $rowx['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $rowx['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>

								<!-- Course -->
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
								$resultx = $mysqli->query("SELECT * FROM music") or die($mysqli->error); 
								$count = 0;	
							?>
							<?php while($rowx = $resultx->fetch_assoc() and $count <= 1): ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/online5.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="music.php"><?php echo $rowx['name']; ?></a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p><?php echo $rowx['description']; ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><?php echo $rowx['price']; ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $count++;  ?>
							<?php endwhile; ?>		
							
							</div>
							
							<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
	            	</div>
	           </div>
			   
			   <!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Categories</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="visitor_computing.php">Computing</a></li>
									<li><a href="visitor_business.php">Business Management</a></li>
									<li><a href="visitor_engineering.php">Engineering</a></li>									
									<li><a href="visitor_designing.php">Designing</a></li>
									<li><a href="visitor_photography.php">Photography</a></li>
									<li><a href="visitor_music.php">Music</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Courses</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
										<div class="latest_price">Free</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
										<div class="latest_price">$170</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
										<div class="latest_price">$220</div>
									</div>
								</div>

							</div>
						</div>	
					</div>
				</div>

	<div style=" width: 300px; padding: 50px;margin: 20px;height: 50px;"></div>
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

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
	</footer>
</div>

<script language="javascript">
function myChangeHandler() {
window.open(this.options[this.selectedIndex].value, '_parent');
this.form.submit(); }
</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>