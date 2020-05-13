<?php include('functions.php') ?>
<!DOCTYPE html>
<head>
<title>Course Details</title>
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
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
<style>
form .stars {
  background: url("images/stars.png") repeat-x 0 0;
  width: 150px;
  margin: 0 auto;
}
 
form .stars input[type="radio"] {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
form .stars input[type="radio"].star-5:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-4:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-3:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-2:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-1:checked ~ span {
  width: 20%;
}
form .stars label {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0!important;
  padding: 0!important;
  text-indent: -999em;
  float: left;
  position: relative;
  z-index: 10;
  background: transparent!important;
  cursor: pointer;
}
form .stars label:hover ~ span {
  background-position: 0 -30px;
}
form .stars label.star-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star-1:hover ~ span {
  width: 20% !important;
}
form .stars span {
  display: block;
  width: 0;
  position: relative;
  top: 0;
  left: 0;
  height: 30px;
  background: url("images/stars.png") repeat-x 0 -60px;
  -webkit-transition: -webkit-width 0.5s;
  -moz-transition: -moz-width 0.5s;
  -ms-transition: -ms-width 0.5s;
  -o-transition: -o-width 0.5s;
  transition: width 0.5s;
}
</style>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
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
								<?php  if (($_SESSION['user']['user_type']) == 'user') : ?>
									<li ><a href="index.php">Home</a></li>
									<li><a href="tasks.php">My Tasks</a></li>
									<li class="active"><a href="designing.php">Courses</a></li>									
									<li ><a href="3a-calendar.php">Latest Events</a></li>
									<li><a href="contactUs.php">Contact Us</a></li>
									<?php endif ?>
									<?php  if (($_SESSION['user']['user_type']) == 'admin'  && ($_SESSION['user']['username']) != 'manager') : ?>
									<li ><a href="home.php">Home</a></li>
									<li><a href="add_assignment.php">Assignments</a></li>
									<li class="active"><a href="designing.php">Courses</a></li>
									<li><a href="3a-calendar.php">Plan Events</a></li>									
									<li><a href="#">Contact Us</a></li>
									<?php endif ?>
									<?php  if (($_SESSION['user']['user_type']) == 'admin' && ($_SESSION['user']['username']) == 'manager') : ?>
									<li ><a href="manager_home.php">Home</a></li>
									<li><a href="add_assignment.php">Assignments</a></li>
									<li class="active"><a href="designing.php">Courses</a></li>
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
								<li><a href="courses.html">Courses</a></li>
								<li>Course Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->
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
	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">Designing</div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Lecurer In-Charge:</div>
								<div class="course_info_text"><a href="#">Ms.Mary James</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Reviews:</div>
								<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
							</div>							

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/designing.jpg" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">description</div>
								<div class="tab">courses</div>
								<div class="tab">reviews</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Designing</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
										<p>A design is a plan or specification for the construction of an object or system or for the implementation of an activity or process, or the result of that plan or specification in the form of a prototype, product or process. The verb to design expresses the process of developing a design.</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Requirements</div>
											<ul class="tab_panel_bullets">
												<li>Basic knowledge on Computer Hardware</li>
												<li>Basic knowledge on Computer Software</li>
												<li>Communication Skills in English Language</li>
												<li>Basic understanding about Preliminary Mathematics</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">What is the target audience?</div>
											<div class="tab_panel_text">
												<p>This course is intended for anyone interested in learning to master his or her knowledge on Designing.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary. </p>
											</div>
										</div>

									</div>
								</div>

								<!-- Curriculum -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
										<div class="tab_panel_title">Designing</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>A design is a plan or specification for the construction of an object or system or for the implementation of an activity or process, or the result of that plan or specification in the form of a prototype, product or process. The verb to design expresses the process of developing a design.</p>
											</div>

											<!-- Dropdowns -->
											
											<?php
												$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
												$result = $mysqli->query("SELECT * FROM design") or die($mysqli->error); 
											?>
											<ul class="dropdowns">
											   <?php while($row = $result->fetch_assoc()): ?>
											   <li class="has_children">													
														<div class="dropdown_item_title"><span><?php echo $row['course_code']; ?></span> &nbsp &nbsp<?php echo $row['name']; ?><span style="float:right;"><i class="fa fa-money" ></i> &nbsp<?php echo $row['price']; ?></span> </div>
														<div class="dropdown_item_text">
															<p><?php echo $row['description']; ?></p>
														</div>	
														<div>
														<br/>
														<!-- Button to Open the Modal-->
													
														<button type="submit"  class="open-rate btn btn-success" name="openModal" data-toggle="modal" data-target="#myModal" data-id=<?php echo $row['course_code']; ?>" >
														  Add Reviews
														</button>
														
														</div>	
												</li>
												<div class="accordions" >
													<div class="elements_accordions">
														<div class="accordion_container" >
															<div class="accordion d-flex flex-row align-items-center" ><div>Enroll </div></div>
																<div class="accordion_panel">
																	<form method="post" action="designing.php">
																	<!-- <div class="panel-heading ">
																		<?php echo display_error(); ?>
																	</div> -->
																	<div class="panel panel-default">
																	<div class="panel-heading row">
																		<div class="col-sm-6">
																			<input type="text" style="display:none;" class="form-control" name="course_name" value="<?php echo $row['name']; ?>">
																			<h4>Payment</h4>
																			<div class="form-group" style="margin-top: 25px;">
																				<input type="text" class="form-control" name="name1" value="" placeholder="Name on Card" required="required">					
																			</div>
																		</div>
																		<div class="col-sm-6">
																			<input type="text" style="display:none;" class="form-control" name="code" value="<?php echo $row['course_code']; ?>">
																			<div style="font-size: 24px;color:black;">
																				<i class="fa fa-cc-visa" ></i>
																				<i class="fa fa-cc-amex" ></i>
																				<i class="fa fa-cc-mastercard" ></i>
																				<i class="fa fa-cc-discover" ></i>
																			</div>
																		<div class="form-group" style="margin-top: 10px;">																		
																			<input type="text" class="form-control" name="card1" value="" placeholder="Card Number" required="required">					
																		</div>
																		</div>
																	</div>
																	
																	</div>
																	<div class="modal-footer">
																	<input type="submit" class="btn btn-success"  name="pay_btn3" value="Pay">
																	</div>
																</form>	
																</div>
															</div>
														</div>
													</div> <hr>
													<br> 
												<?php endwhile; ?>
											</ul>
											
										</div>
									</div>
								</div>

								<?php
												$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
												
												$result = $mysqli->query("SELECT * FROM rate") or die($mysqli->error); 
												
												$count =  $mysqli->query("SELECT count(rate_id) AS num FROM rate") or die($mysqli->error);
												$ratings = $count->fetch_assoc();
												$numRatings = $ratings['num'];
								?>
								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Ratings & Reviews</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
												<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text"><?php echo $numRatings; ?></div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>
									
									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
										 <?php while($row = $result->fetch_assoc()): ?>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="images/user2.jpg" alt=""></div></div>
															<div class="comment_content">
															<div class="comment_author"><a href="#"><?php echo $row['course_code']; ?></a></div>
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#"><?php echo $row['reviewer']; ?></a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_<?php echo $row['rate']; ?>"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto"><?php echo $row['date']; ?></div>
																</div>
																<div class="comment_text">
																	<p><?php echo $row['comment']; ?></p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																</div>
															</div>
														</div>
													</li>
											<?php endwhile; ?>	
										
										</ul>
										<div class="add_comment_container">
											<div class="add_comment_title">Add a review</div>
											<div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Category Features</div>
							<div class="sidebar_feature">
								<div class="course_price">$180</div>

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
										<div class="feature_text ml-auto">2 weeks</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">10</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">6</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">Yes</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Teacher</div>
							<div class="sidebar_teacher">
								<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_image"><img src="images/team_7.jpg" alt=""></div>
									<div class="teacher_title">
										<div class="teacher_name"><a href="#">Ms.Mary James</a></div>
										<div class="teacher_position">Professional Designer</div>
									</div>
								</div>
								<div class="teacher_meta_container">
									<!-- Teacher Rating -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Average Rating:</div>
										<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Review -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Review:</div>
										<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Quizzes -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Quizzes:</div>
										<div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="teacher_info">
	 								<p> Hi! I'm Mary James, I will be the Lecturer in-charge for this course. Please feel free to contact me any time. I will be there for your convenience</p>
								</div>
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
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
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

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
			  <!-- The Modal -->
	<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Add Rate & Comments</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form id="ratingsForm" action="rate.php"  method="post">
				<div class="stars">
					<input type="radio" name="star" class="star-1" id="star-1" value="1" />
					<label class="star-1" for="star-1">1</label>
					<input type="radio" name="star" class="star-2" id="star-2" value="2"/>
					<label class="star-2" for="star-2">2</label>
					<input type="radio" name="star" class="star-3" id="star-3" value="3"/>
					<label class="star-3" for="star-3">3</label>
					<input type="radio" name="star" class="star-4" id="star-4" value="4"/>
					<label class="star-4" for="star-4">4</label>
					<input type="radio" name="star" class="star-5" id="star-5" value="5"/>
					<label class="star-5" for="star-5">5</label>
					<span></span>
				</div>
				
				<?php
					$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
									
					$result = $mysqli->query("SELECT * FROM design") or die($mysqli->error); 
				?>				
						
				<div class="form-group">
					<label for="usr">Name:</label>
				    <input type="text" class="form-control" name="name">
				</div>
				
				<div class="form-group">
				<label for="course">Course:</label>
				<select id="course_rate" name="course_rate" style="width: 100%;  padding: 16px 20px;  border: 1px solid grey;  border-radius: 4px;  background-color: #fff;}">
				<?php while($row = $result->fetch_assoc()): ?>
				  <option  name="rate_course_id" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>	
				<?php endwhile; ?>	
				</select>
				</div>
				
				<div class="form-check-inline">
				  <label class="form-check-label">
					<input type="radio" class="form-check-input" name="optradio" value="Student">Student
				  </label>
				</div>
				<div class="form-check-inline">
				  <label class="form-check-label">
					<input type="radio" class="form-check-input" name="optradio" value="Lecturer">Lecturer
				  </label>
				</div>
				<br/>	
				<br/>
				<div class="form-group">
				  <label for="comment">Comment:</label>
				  <textarea class="form-control" rows="5" name="comment"></textarea>
				</div>
				<input type="hidden" name="course_id" id="course_id" value="">	
				<button type="submit" class="btn btn-primary" name="submitReview">Submit</button>
							
			</form> 

		    	
        </div>	
        
		
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>-->
        
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/course.js"></script>
</body>
</html>