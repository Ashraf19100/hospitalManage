<!doctype html>
<html class="no-js" lang="en">
<!-- ======================head start================================= -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ehospital Management</title>
	<meta name="description" content="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!--=== Reset Css ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/normalize.css')}}">
	<!--=== Animate ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/plugin/animate.css')}}">
	<!--=== Hover Animation ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/plugin/hover-min.css')}}">
	<!--=== Bootstrap ===-->
	<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--=== Fontawesome icon ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/font-awesome.min.css')}}">
	<!-- ================= *** Icofont CSS *** ================== -->
	<link href="{{asset('ui/backend/assets/css/icofont.css')}}" rel="stylesheet" type="text/css">
	<!-- ================= *** Meanmenu CSS *** ===================== -->
	<link href="{{asset('ui/backend/assets/css/meanmenu.css')}}" rel="stylesheet" type="text/css">
	<!-- ================= *** AOS CSS *** ===================== -->
	<link href="{{asset('ui/backend/assets/css/plugin/aos.css')}}" rel="stylesheet">
	<!--=== Owl carousel ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/plugin/owl.carousel.min.css')}}">
	<!--=== Magnific PopUp ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/plugin/magnific-popup.css')}}">
	<!-- ================= *** Common CSS *** ========================== -->
	<link href="{{asset('ui/backend/assets/css/common.css')}}" rel="stylesheet" type="text/css">
	<!--=== Main Css ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/style.css')}}">
	<!-- Google Lato Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<!--=== Responsive Css ===-->
	<link rel="stylesheet" href="{{asset('ui/backend/assets/css/responsive.css')}}">
	<script src="{{asset('ui/backend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<!-- ======================================head end===================================== -->
<body>
    <!-- top-head start -->
	<x-frontend.body.top-head>
	</x-frontend.body.top-head>
    <!-- top head end -->
	<!-- main body start -->
    <div class="main-body row">
		<!-- side nav start -->
		<x-frontend.body.side_nav>
		</x-frontend.body.side_nav>
		<!-- side nav end -->
        <div class="col main-content">
			<!-- nav-bar start -->
			<x-frontend.body.nav_bar>
			</x-frontend.body.nav_bar>
			<!-- nav bar end -->
			<div class="content">
			<x-frontend.body.profile_details>
			</x-frontend.body.profile_details>
			{{ $slot }}
			</div>
		</div>
	</div>
	<!-- main body end -->
	
	
	
	
	<!--===============================script start===================================-->
	<script type="text/javascript" src="{{asset('ui/backend/assets/js/jquery-3.2.0.min.js')}}"></script>
	<script>
		window.jQuery || document.write('<script src="{{asset(`ui/backend/assets/js/vendor/jquery-1.12.0.min.js`)}}"><\/script>')
	</script>
	<!--=== All Plugin ===-->
	<script type="text/javascript" src="{{asset('ui/backend/assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('ui/backend/assets/js/bootstrap.min.js')}}"></script>

	<!--=== All Active ===-->
	<script type="text/javascript" src="{{asset('ui/backend/assets/js/main.js')}}"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function (b, o, i, l, e, r) {
			b.GoogleAnalyticsObject = l;
			b[l] || (b[l] =
				function () {
					(b[l].q = b[l].q || []).push(arguments)
				});
			b[l].l = +new Date;
			e = o.createElement(i);
			r = o.getElementsByTagName(i)[0];
			e.src = 'https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e, r)
		}(window, document, 'script', 'ga'));
		ga('create', 'UA-XXXXX-X', 'auto');
		ga('send', 'pageview');
	</script>
    <!-- ===================================script end=================================== -->
</body>

</html>