<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LambSwap</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{url('assets/images/Footer.png')}}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{url('/assets/template/tuser/css/bootstrap.min.css')}}">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{url('/assets/template/tuser/css/plugin.css')}}">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{url('/assets/template/tuser/css/style.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{url('/assets/template/tuser/css/responsive.css')}}">
</head>
<body>


	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- Header Area Start  -->
	@include('user.components.navbar')
	<!-- Header Area End  -->

    <!-- Pages Content -->
    @yield('content')
    <!-- Pages Content End -->


	<!-- Footer Area Start -->
	@include('user.components.footer')
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->

	<!-- SignIn Area Start -->
	@include('user.components.authModal')
	<!-- SignIn Area End -->


	<!-- jquery -->
    <script src="{{url('/assets/template/tuser/js/jquery.js')}}"></script>
	<!-- popper -->
	<script src="{{url('/assets/template/tuser/js/popper.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{url('/assets/template/tuser/js/bootstrap.min.js')}}"></script>
	<!-- plugin js-->
	<script src="{{url('/assets/template/tuser/js/plugin.js')}}"></script>
	<!-- MpusemoverParallax JS-->
	<script src="{{url('/assets/template/tuser/js/TweenMax.js')}}"></script>
	<script src="{{url('/assets/template/tuser/js/mousemoveparallax.js')}}"></script>
	<!-- main -->
	<script src="{{url('/assets/template/tuser/js/main.js')}}"></script>
</body>

</html>

<script>
    $('#exchange').click(function() {
        var price = JSON.parse("{{ json_encode($onGoing->price) }}");
        var valCrypt = $('#inputCrypt').val()
        var current = valCrypt * 0.000099
        $('#current').val(current)
        $('#setLST').val(valCrypt)
        $('#setBUSD').val(current)
    })
</script>
