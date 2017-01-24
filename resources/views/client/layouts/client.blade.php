<!doctype html>
<html lang="az">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>GoTender.Az</title>
	<meta name="description" content="HTML Responsive Template for Car Dealer Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="car dealer, automotive, car auction, car shop, showroom" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/client/images/ico/favicon.png">

	<!-- CSS Cores and Plugins -->
	<link rel="stylesheet" type="text/css" href="/client/bootstrap/css/bootstrap.min.css" media="screen">
	<link href="/client/css/animate.css" rel="stylesheet">
	<link href="/client/css/main.css" rel="stylesheet">
	<link href="/client/css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="/client/css/style.css" rel="stylesheet">

	<!-- Your Own Style -->
	<link href="/client/css/your-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>



<body class="with-top-header">

	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">

			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

				<div id="top-header">

					<div class="container">

						<div class="row">

							<div class="col-xs-12 col-sm-6 clearfix">



								@if(Auth::check())
								<div class="top-header-widget welcome">
									<p><a href="/profile">Hesabım</a> |
									<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıxış</a></p>
								</div>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
								</form>
								@else
								<div class="top-header-widget welcome">
									<p>Xoş gəlmisiniz | <a href="javascript:void(0)" class="btn-ajax-login" data-toggle="modal">Daxil olun</a> və ya  <a href="javascript:void(0)" class="btn-ajax-register" data-toggle="modal">Qeydiyyatdan keçin</a> </p>
								</div>
								@endif
							</div>

							<div class="col-sm-6 clearfix hidden-xs">

								<div class="top-header-widget pull-right">
									<a href="#">
										 Kömək
									</a>

								</div>
								<div class="top-header-widget pull-right">
									<a href="#">
										 Reklam
									</a>

								</div>



							</div>

						</div>

					</div>

				</div>

				<div class="container">

					<div class="navbar-header">
						<a class="navbar-brand" href="/"><strong class="text-primary">Go</strong>Tender</a>
					</div>

					<div id="navbar" class="collapse navbar-collapse navbar-arrow pull-left">



						<ul class="nav navbar-nav" id="responsive-menu">
							<li><a style="" href="/"><i  class="fa fa-home fa-1x"></i></a></li>
							<li><a href="">Bu necə işləyir?</a></li>
							<li><a href="">Tenderlər</a></li>
							<li><a href="">Tender Yarat</a></li>
							<li><a href="">Reytinq</a></li>
							<li><a href="">Xəbərlər</a></li>
							<li><a href="">Əlaqə</a></li>
						</ul>

					</div><!--/.nav-collapse -->

				</div>

				<div id="slicknav-mobile"></div>

			</nav>
			<!-- end Navbar (Header) -->

		</header>

  @yield('content')

		<div class="footer-wrapper scrollspy-footer">

			<footer class="main-footer">

				<div class="container footer-newsletter">

					<div class="inner">

						<div class="row">

							<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">

								<div class="row gap-15">

									<div class="col-xs-12 col-sm-4 col-md-3">
										<h4>Taladrod Newsletter</h4>
									</div>

									<div class="col-xss-12 col-xs-7 col-sm-5 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter your email subscribe">

										</div>
									</div>

									<div class="col-xss-12 col-xs-5 col-sm-3 col-md-3">
										<input type="submit" class="btn btn-submit btn-primary btn-block" value="Subscribe">
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-3 mb-30-sm">

							<div class="footer-logo">
								<a href="#home"><strong class="text-primary">TALAD</strong>Rod</a>
							</div>

							<p class="about-us-footer">Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at... <a href="#" class="font-italic">read more</a></p>

							<div class="social-footer clearfix">
								<a href="#"><i class="fa fa-facebook-official"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus "></i></a>
								<a href="#"><i class="fa fa-codepen"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
								<a href="#"><i class="fa fa-github"></i></a>
								<a href="#"><i class="fa fa-jsfiddle"></i></a>
							</div>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 mb-30-sm">

							<h4 class="footer-title">Quick Menu</h4>

							<ul class="menu-footer">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Partners</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Press</a></li>
								<li><a href="#">Contact</a></li>
							</ul>

						</div>

						<div class="sm-clear"></div>

						<div class="col-xs-12 col-sm-12 col-md-3  mb-30-sm">

							<h4 class="footer-title">Office Hours</h4>

							<ul class="office-hour">
								<li >
									Monday - Friday
									<span>08:00 - 19:00</span>
								</li>
								<li >
									Saturday
									<span>08:00 - 14:30</span>
								</li>
								<li class="text-primary">
									Sunday
									<span>Closed</span>
								</li>
							</ul>



						</div>

						<div class="col-sm-12 col-md-3">

							<h4 class="footer-title">Address</h4>
							<p class="footer-address">11/87, Santisuk Road, T. Sabarang, A.Muang, Pattani 94000 <br /><span class="block text-white font20 font700 line20 mt-10 mb-5">+66 74 665 855</span>support@taladrod.com</p>

						</div>

					</div>

				</div>




			</footer>

			<footer class="secondary-footer">

				<div class="container">

					<div class="row">

						<div class="col-sm-6">
							<p class="copy-right">&#169; Copyright 2016 TALADRod - Responsive Template.</p>
						</div>

						<div class="col-sm-6">
							<ul class="secondary-footer-menu clearfix">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Sign-in</a></li>
								<li><a href="#">Sign-up</a></li>
							</ul>
						</div>

					</div>

				</div>

			</footer>

		</div>
		<!-- end footer-wrapper -->

	</div>
	<!-- end Container Wrapper -->

<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->



<div id="ajaxLoginModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
</div>


<div id="ajaxRegisterModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
</div>

<div id="ajaxForgotPasswordModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>

<script type="text/javascript">
	var loginModal = "{{ url('login-modal') }}";
	var registerModal = "{{ url('register-modal') }}";
	var forgotModal = "{{ url('forgot-modal') }}";
</script>

<!-- JS Global -->
<script type="text/javascript" src="/client/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/client/js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="/client/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/client/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/client/js/fancySelect.js"></script>
<script type="text/javascript" src="/client/js/slick.min.js"></script>
<script type="text/javascript" src="/client/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/client/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="/client/js/customs.js"></script>

@if(Session::has('mesaj'))
<div id="sexyModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title text-center">Diqqət!</h4>
	</div>

	<div class="modal-body">

		<div class="row gap-20">


			<div class="text-center">
				<p>{{ Session::get('mesaj') }}</p>
			</div>

		</div>

	</div>

	<div class="modal-footer text-center">
		<button type="button" data-dismiss="modal" class="btn btn-default">Bağla</button>
	</div>

</div>
<script type="text/javascript">
    $(window).load(function(){
        $('#sexyModal').modal('show');
    });
</script>
@endif
</body>

</html>
