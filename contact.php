<?php
// Free Html5 Themes : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['SubmitContact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zRealEstate - Free Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body class="contact-page">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.html">Home</a></li>
				    <li><a href="about.html">About</a></li>
				   <li><a href="projects.html">Projects</a></li>
				   <li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<a href='index.html' class="logo"><img src="images/logo.png" /></a>
		</div>
	</div>
</header>
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container" >
		<ul class="rslides" id="slider">
			<li>
				<img src="images/slideshow-image1.jpg" alt="">
				<div class="caption">
					<h1>GREAT VILLA</h1>
					<span > LOREM IPSUM DOLOR SIT AMET<br> CONSECTETUR ADIPISCING.</span>
					<div class="price">$ 170,000</div>
				</div>
			</li>
			<li>
				<img src="images/slideshow-image2.jpg" alt="">
				<div class="caption">
					<h1>GREAT VILLA</h1>
					<span > LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISCING.</span>
					<div class="price">$ 170,000</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">

		<!-----------------content-box-------------------->
		<section class="content-box">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div id="main-content">
						<div class="header">
							<div class="zerogrid wrapper">
								<h2>CONTACT</h2>
							</div>
						</div>							
						<div class="zerogrid">
							<div class="row">
								<div class='embed-container maps'>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<h5 class="color-orange">Contact Form</h5>
											<!--Warning-->
											<center><?php echo $text;?></center>
											<!---->
											<div id="contact_form">
												<form name="form1" id="ff" method="post" action="contact.php">
													<label class="row">
														<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
													</label>
													<label class="row">
														<input type="text" name="email" id="email" placeholder="Enter Email" required="required" />
													</label>
													<label class="row">
														<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"placeholder="Message"></textarea>
													</label>
													<center><input class="button" type="submit" name="SubmitContact" value="Submit"></center>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<h5 class="color-orange">Contact Info</h5>
											<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE.</span>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore quasi. Nemo enim ipsam voluptatem quia.</p>
											<p>JL.Kemacetan timur no.23. block.Q3<br>
												Jakarta-Indonesia</p>
											   <p>+6221 888 888 90 <br>
												+6221 888 88891</p>
											<p>info@yourdomain.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class='embed-container maps' style="margin: 0; padding: 0;height: 250px;">
		
	</div>
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<h3>Contact</h3>
				<span>Phone / +80 999 99 9999 </span></br>
				<span>Email / info@domain.com  </span></br>
				<span>Studio / Moonshine St. 14/05 Light City </span></br>
				<span><strong>Copyright 20xx - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a> </strong></span>
				<ul class="social-buttons">
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</div>
</body></html>