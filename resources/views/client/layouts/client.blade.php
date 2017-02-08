<!doctype html>
<html lang="az">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>@yield('title') {{config('app.title')}}</title>
	<meta name="description" content="{{config('app.desc')}}" />
	<meta name="keywords" content="{{config('app.keywords')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


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
									<p><a href="/profile">Hesabım</a>  |

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
									<a style="padding: 5px" href="{{config('app.facebook')}}"><i class="fa-lg fa fa-facebook-official"></i></a>
									<a style="padding: 5px" href="{{config('app.twitter')}}"><i class="fa-lg fa fa-twitter"></i></a>
									<a style="padding: 5px" href="{{config('app.instagram')}}"><i class="fa-lg fa fa-instagram"></i></a>
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
							<li><a href="{{route('tender.create')}}">Tender Yarat</a></li>
							<li><a href="">Reytinq</a></li>
							<li><a href="{{route('xeberler')}}">Xəbərlər</a></li>
							<li><a href="{{route('elaqe')}}">Əlaqə</a></li>
						</ul>

					</div><!--/.nav-collapse -->

				</div>

				<div id="slicknav-mobile"></div>

			</nav>
			<!-- end Navbar (Header) -->

		</header>

  @yield('content')

		<div class="footer-wrapper scrollspy-footer">



			<footer class="secondary-footer">

				<div class="container">

					<div class="row">

						<div class="col-sm-6">
							<p class="copy-right">&#169; Copyright 2016 TALADRod - Responsive Template.</p>
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
