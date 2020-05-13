<?php include('sendEmail.php') ?>
<?php 
    include('functions.php');
    if (!isLoggedIn()) {
	    $_SESSION['msg'] = "You must log in first";
	    header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<!-- Pop-up Window CSS -->
<style>
			body {font-family: Arial, Helvetica, sans-serif;}
			* {box-sizing: border-box;}

			/* Button used to open the chat form - fixed at the bottom of the page */
			.open-button {
			  background-color: #0D306C;
			  color: white;
			  padding: 16px 20px;
			  border: none;
			  cursor: pointer;
			  opacity: 0.8;
			  position: fixed;
			  bottom: 23px;
			  right: 28px;
			  width: 280px;
			}

			/* The popup chat - hidden by default */
			.chat-popup {
			  display: none;
			  position: fixed;
			  bottom: 0;
			  right: 15px;
			  border: 3px solid #2D637A;
			  z-index: 9;
			}

			/* Add styles to the form container */
			.form-container {
			  max-width: 300px;
			  padding: 10px;
			  background-color: white;
			}

			/* Full-width textarea */
			.form-container textarea {
			  width: 100%;
			  padding: 15px;
			  margin: 5px 0 22px 0;
			  border: none;
			  background: #f1f1f1;
			  resize: none;
			  min-height: 200px;
			}

			/* When the textarea gets focus, do something */
			.form-container textarea:focus {
			  background-color: #ddd;
			  outline: none;
			}

			/* Set a style for the submit/send button */
			.form-container .btn {
			  background-color: #1B8CA2;
			  color: white;
			  padding: 16px 20px;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			  margin-bottom:10px;
			  opacity: 0.8;
			}

			/* Add a red background color to the cancel button */
			.form-container .cancel {
			  background-color: #DB1A47;
			}

			/* Add some hover effects to buttons */
			.form-container .btn:hover, .open-button:hover {
			  opacity: 1;
			}
</style>
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
									<li><a href="tasks.php">My Tasks</a></li>
									<li><a href="courses.php">Courses</a></li>									
									<li><a href="3a-calendar.php">Latest Events</a></li>
									<li class="active"><a href="contactUs.php">Contact Us</a></li>
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
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
	
		<!-- Contact Info -->

		<div class="contact_info_container">

		<div style="display:none" id="alert">
		<div class="alert alert-success alert-dismissable fade show">
                <button class="close" data-dismiss="alert" aria-label="Close">×</button><strong>Success!</strong> You message has been sent!
		 </div>
		</div>
		 
			<div class="container">
				<div class="row">

				
					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Contact Form</div>
							
							<form action="sendEmail.php" class="comment_form" method="post">
								<div>
									<div class="form_title">Name</div>
									<input type="text" class="comment_input"  name="name" required="required">
								</div>
								<div>
									<div class="form_title">Your Email</div>
									<input type="text" class="comment_input"  name="student" required="required">
								</div>
								<div>
									<div class="form_title">Lecturer Email</div>
									<input type="text" class="comment_input"  name="lecturer" required="required" >
								</div>
								<div>
									<div class="form_title">Message</div>
									<textarea class="comment_input comment_textarea"  name="message" required="required"></textarea>
								</div>
								<div>
									<button type="submit" class="comment_button trans_200" name="submit" required="required">
									<i class="fa fa-paper-plane" style="font-size: 1.5em;"></i>&nbsp;Send Email
									</button>
								</div>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							<div class="contact_info_text">
							<br/>							
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">New York Office</div>
								<ul class="location_list">
									<li>T8/480 Collins St, Melbourne VIC 3000, New York</li>
									<li>1-234-567-89011</li>
									<li>info.deercreative@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Australia Office</div>
								<ul class="location_list">
									<li>Forrest Ray, 191-103 Integer Rd, Corona Australia</li>
									<li>1-234-567-89011</li>
									<li>info.deercreative@gmail.com</li>
								</ul>
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
	
	<!-- Popup Chat Window -->
		<button class="open-button" onclick="openForm()">
		<i class="fa fa-comment" aria-hidden="true" style="font-size: 1.5em;"></i>&nbsp;Online Support
		</button>

		<div class="chat-popup" id="myForm">
		  <form action="sendEmail.php" class="form-container" method="post">
			<h3>Student Support</h3>
			<br/>
			<label for="msg"><b>Online Technical Support</b></label>
			<textarea placeholder="Type your issue.." name="msg" required></textarea>

			<button type="submit" class="btn" name="send"  onclick="alert()">Send</button>
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		  </form>
		</div>

		<script>
		function alert(){
			document.getElementById("alert").style.display = "block";
		}

		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
		</script>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>