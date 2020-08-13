<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="EduRead - Education HTML5 Template">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Holy field Private School</title>
	<link rel="shortcut icon" href="images/logox.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('css/assets/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('css/assets/font-awesome.min.css')}}">
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7cOpen+Sans:400,600" rel="stylesheet">
    <!-- owl carousel -->
	<link href="{{asset ('css/assets/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset ('css/assets/owl.theme.css') }}" rel="stylesheet">
	<!-- Popup -->
	<link href="{{asset ('css/assets/magnific-popup.css')}}" rel="stylesheet">
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="{{asset ('css/assets/revolution/layers.css')}}">
	<link rel="stylesheet" href="{{asset ('css/assets/revolution/navigation.css')}}">
	<link rel="stylesheet" href="{{asset ('css/assets/revolution/settings.css')}}">
	<!-- Slick Slider -->
	<link href="{{asset ('css/assets/slick.css')}}" rel="stylesheet">
	<link href="{{asset ('css/assets/slick-theme.css')}}" rel="stylesheet">
	<!-- Main Menu-->
	<link rel="stylesheet" href="{{asset ('css/assets/meanmenu.css')}}" media="all" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
</head>




@yield('content')


<!-- Footer Area section -->
<footer>
	<div class="container">
		<div class="row">
			<div class=" col-sm-12 footer-content-box">
				<div class="col-sm-6">
					<h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> HOLY FIELD PRIVATE SCHOOL <br><p>Work and Pray</p></h3>
					<p>We help you bring out the best out of your children. </p>
					<ul class="list-unstyled">
						<li><span><i class="fa fa-phone footer-icon"></i></span>08033845876, 08033888192</li>
						<li><span><i class="fa fa-envelope footer-icon"></i></span>hfps.ajuwon@gmail.com</li>
						<li><span><i class="fa fa-map-marker footer-icon"></i></span>11, Ayinla Ademokoya Street <br> Off Baale Road <br> Iju- Ajuwon</li>
					</ul>
				</div>


				<div class="col-sm-2">
					<h3>Links</h3>
					<ul class="list-unstyled">
						<li><a href="/teacher"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Teachers</a></li>
						<li><a href="/event"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a></li>
						<li><a href="/gallery"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
						<li><a href="/blog"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Blog</a></li>
						<li><a href="/about"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About The School</a></li>
						<li><a href="/contact"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
						<li><a href="/admission"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Admission</a></li>
					</ul>
				</div>



				<div class="col-sm-3">
					<h3>Get in touch</h3>
					<p>Enter your email and we'll send you more information.</p>

					<form action="#">
						<div class="form-group">
							<input placeholder="Your Email" type="email" required="" >
							<div class="submit-btn">
								<button type="submit" class="text-center">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p> Holy Field Private School &copy; <script> var date= new Date; document.write(date.getFullYear())</script> | All rights reserved</p>
					</div>
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<ul class="list-unstyled footer-menu text-right">
							<li>Follow us:</li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ./ End footer-bottom -->
</footer>
    <!-- jQuery -->
	<script src="{{asset ('js/vendor/jquery-1.12.4.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset ('js/assets/bootstrap.min.js')}}"></script>
	 <!-- owl carousel -->
    <script src="{{asset ('js/assets/owl.carousel.min.js')}}"></script>
 	<!-- Revolution Slider -->
	<script src="{{asset ('js/assets/revolution/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset ('js/assets/revolution/jquery.themepunch.tools.min.js')}}"></script>
	<!-- Popup -->
    <script src="{{asset ('js/assets/jquery.magnific-popup.min.js')}}"></script>
    <!-- Sticky JS -->
	<script src="{{asset ('js/assets/jquery.sticky.js')}}"></script>
	<!-- Counter Up -->
    <script src="{{asset ('js/assets/jquery.counterup.min.js')}}"></script>
    <script src="{{asset ('js/assets/waypoints.min.js')}}"></script>
   <!-- Slick Slider-->
    <script src="{{asset ('js/assets/slick.min.js')}}"></script>
    <!-- Main Menu -->
	<script src="{{asset ('js/assets/jquery.meanmenu.min.js')}}"></script>
	<!-- Revolution Extensions -->
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/extensions/revolution.extension.video.min.js')}}"></script>
	<script type="text/javascript" src="{{asset ('js/assets/revolution/revolution.js')}}"></script>
	<!-- Custom JS -->
	<script src="{{asset ('js/custom.js')}}"></script>
</body>

</html>
