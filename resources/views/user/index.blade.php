<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lambswap is a decentralized exchange aggregator that provides the best prices over multiple DEXs on the 9 blockchain. With Innovative Models with DEFI, NFT Gaming Metaverse."/>
    <meta property="og:title" content="The First DEXs Aggregator"/>
    <meta property="og:url" content="https://lambswap.org"/>
    <meta property="og:description" content="Lambswap is a decentralized exchange aggregator that provides the best prices over multiple DEXs on the 9 blockchain. With Innovative Models with DEFI, NFT Gaming Metaverse."/>
    <meta property="og:image" content="{{url('/assets/image/share.jpg')}}"/>

	<title>LambSwap - The First DEXs Aggregator</title>

    <!-- favicon -->
	<link rel="shortcut icon" href="{{url('/assets/images/Favicon.ico')}}" type="image/x-icon">
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
	{{-- <div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div> --}}
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
        var current = valCrypt / price
        $('#current').val(current)
        $('#setLST').val(current)
        $('#setBUSD').val(valCrypt)
    })

    $(document).ready(function () {
        var min = JSON.parse("{{ json_encode($onGoing->min) }}");
        var max = JSON.parse("{{ json_encode($onGoing->max) }}");
        var price = JSON.parse("{{ json_encode($onGoing->price) }}");
        $('#inputCrypt').on('input change', function() {
            var valCrypt = $(this).val()
            var current = valCrypt / price
            $('#current').val(current)
            $('#setLST').val(current)
            $('#setBUSD').val(valCrypt)


            if ($(this).val() < min ) {
                $('#btn_buy').prop('disabled', true)
            } else if($(this).val() > max ) {
                $('#btn_buy').prop('disabled', true)
            } else {
                $('#btn_buy').prop('disabled', false)
            }
        })
    })
</script>
