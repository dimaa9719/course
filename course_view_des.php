
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
<link rel="stylesheet" type="text/css" href="styles/course.css">
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
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									
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
									<?php  if (($_SESSION['user']['user_type']) == 'admin') : ?>
									<li ><a href="home.php">Home</a></li>
									<li><a href="add_assignment">Assignments</a></li>
									<li class="active"><a href="#">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
									<?php endif ?>
									<?php  if (($_SESSION['user']['user_type']) == 'user') : ?>
									<li ><a href="index.php">Home</a></li>
									<li><a href="tasks.php">My Tasks</a></li>
									<li class="active"><a href="#">Courses</a></li>
									<li><a href="3a-calendar.php">Latest Events</a></li>
									<li><a href="contactUs.php">Contact Us</a></li>
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
								<li>Course View</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


	<!-- Feature -->
	<?php
			
			$code = $_POST['code'];
		$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
     
		$re1 = $mysqli->query("SELECT * FROM design  WHERE course_code = '$code' ") or die($mysqli->error);
		
	?>
		
	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>

		<?php while($row = $re1->fetch_assoc()): ?>
		

			<div class="container">

			<div class="section_title_container text-center">
						<h2 class="section_title"> Welcome to <?php echo $row['name']; ?>!</h2>
						<div class="section_subtitle"><p><?php echo $row['description']; ?></p></div>
					</div>
				 <br><br>
			<div class="row" style="margin-top:60px;">
				<div class="col-sm-8">

				<div class="feature_video d-flex flex-column align-items-center justify-content-center">

					<?php
						// connect to database
						$conn = mysqli_connect('localhost', 'root', '', 'course');

						$sql = "SELECT * FROM files";
						$result = mysqli_query($conn, $sql);

						$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
					?>


						<!-- <table>
						<thead>
							<th>ID</th>
							<th>Filename</th>
							<th>size (in mb)</th>
							<th>Downloads</th>
							<th>Action</th>
						</thead>
						<tbody>
						<?php foreach ($files as $file): ?>
							<tr>
							<td><?php echo $file['id']; ?></td>
							<td><?php echo $file['name']; ?></td>
							<td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
							<td><?php echo $file['downloads']; ?></td>
							<td><a href="course_view.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
							</tr>
						<?php endforeach;?>

						</tbody>
						</table> -->
						<?php echo "<video width='800' controls>
							<source src='task/".$row['file']."' type='video/webm'>
						</video>"
						?>;
						
						</div>


				</div>
			<div class="col-sm-4">

			<div class="sidebar">

					<!-- Feature -->
					<div class="sidebar_section" style="margin-top: -155px;">
						<div class="sidebar_section_title">Course Feature</div>
						<div class="sidebar_feature">
							<div class="course_price" style="font-size:25px;"><?php echo $row['price']; ?></div>

							<!-- Features -->
							<div class="feature_list">

								<!-- Feature -->
								<div class="d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
									<div class="feature_text ml-auto">60 min</div>
								</div>

								<!-- Feature -->
								<div class=" d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
									<div class="feature_text ml-auto">10</div>
								</div>

								<!-- Feature -->
								<div class="d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
									<div class="feature_text ml-auto">6</div>
								</div>

								<!-- Feature -->
								<div class=" d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
									<div class="feature_text ml-auto">Yes</div>
								</div>

								<!-- Feature -->
								<div class=" d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
									<div class="feature_text ml-auto">35</div>
								</div>

							</div>
						</div>
					</div>


					<!-- Latest Course -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Latest Design Courses</div>
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
									<div class="latest_price">Free</div>
								</div>
							</div>
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<a href="designing.php" class="btn btn-primary  justify-content-start"> Show More </a>
							</div>

						</div>
					</div>

					</div>
					
				
				<?php endwhile; ?>
			</div>	
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
                <h4>Add a New Course</h4>
                <br>
                <div class="panel-heading ">
                        <?php echo display_error(); ?>
                    </div>
            <form method="post"  action="add_course.php">
                    
                    <div class="form-group">
					<i class="fa fa-cubes"></i>
						<select name="category" id="category" class="form-control" >
							<option value="">Select the Category</option>
							<option value="development">Computing</option>
                            <option value="business">Business</option>
                            <option value="engineering">Engineering</option>
                            <option value="design">Design</option>
                            <option value="music">Music</option>
                            <option value="photography">Photography</option>
						</select>
					</div>
					<div class="form-group">
						<i class="fa fa-tags"></i>
						<input type="text" class="form-control" name="course_code"  placeholder="Course Code" required="required"> 
					</div>
					<div class="form-group">
						<i class="fa fa-file-text"></i>
						<input type="text" class="form-control" name="name"  placeholder="Course Name" required="required">					
		  			</div>
                    
                    <div class="form-group">
                        <i class="fa fa-address-card"></i>
                        <textarea class="form-control" rows="5" name="description"  placeholder="Description" ></textarea>
                    </div>

                    <div class="form-group">
						<i class="fa fa-money"></i>
						<input type="text" name="price" class="form-control"  placeholder="Price(LKR)" required="required">					
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit" name="add_btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>			
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