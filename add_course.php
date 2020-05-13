
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
									<li><a href="add_assignment.php">Assignments</a></li>
									<li class="active"><a href="add_course.php">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
							<?php endif ?>
							<?php  if (($_SESSION['user']['user_type']) == 'admin' && ($_SESSION['user']['username']) == 'manager') : ?>
									<li ><a href="manager_home.php">Home</a></li>
									<li><a href="add_assignment.php">Assignments</a></li>
									<li class="active"><a href="add_course.php">Courses</a></li>
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

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div class="container">
	
				<!-- Feature Content -->
				<div class="">
					<div class="feature_content">
                    <div class="row feature_row">
                            <div class="features">
                                <div class="container">
                                    <div class="row features_row" style="margin-top: -75px;">	
                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
                                                <h3 class="feature_title">Computing</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
                                                <h3 class="feature_title">Business</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
                                                <h3 class="feature_title">Enginnering</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row features_row" style="margin-top: -75px;">	
                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
                                                <h3 class="feature_title">Designing</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
                                                <h3 class="feature_title">Photography</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                        <!-- Features Item -->
                                        <div class="col-lg-4 feature_col">
                                            <div class="feature text-center trans_400">
                                                <div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
                                                <h3 class="feature_title">Music</h3>
                                                <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
						<br>
                           <div class=" row">
                                <div class="col-sm-9">
                                    <h4 >Add Courses</h4>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal" >Add New Course</button>
									<a href="courses.php" class="btn btn-danger" >View Courses</a>
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
										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_com.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>
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

										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_eng.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>

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

										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_bus.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>

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

										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_des.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>

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

										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_pho.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>

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

										<?php
											if (isset($_POST['view'])) {	
												$code = $_POST['code'];
											}
										?>
										<form action="course_view_mus.php" method ="post">
											<input type="text" name="code" value="<?php echo $row['course_code']; ?>" style="display:none;" >
											<a class="list-group-item list-group-item-default" style="color:rgb(31, 31, 31)"><b><?php echo $row['name']; ?> &nbsp(<?php echo $row['course_code']; ?> )
											<input type="submit" value="view" name="view" class = "btn btn-primary" style="float:right;padding: 5px 10px;margin-top: -5px;">  </b> </a>
										</form>

										<?php endwhile; ?>
									</ul>
                               
                                </div>
                            </div>
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
        <div class="modal-dialog modal-login" >
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

				

	            <form method="post"  action="add_course.php" enctype="multipart/form-data">

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

					<label>Upload Course Video: </Label><br>
                    <div class="form-group">
                    <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="myfile"> <br>
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
	

	<div class="modal fade" id="noti" role="dialog">


        <div class="modal-dialog modal-login">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" style="padding: 12px;margin-top: -12px;" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="padding:5px;">
                <label>You file extension must be .mp4, .pdf or .avi</label>

		
                      
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
        width: 450px;;
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