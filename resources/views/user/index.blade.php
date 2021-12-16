<!DOCTYPE html>
<html lang="en">

@include('user.components.head')

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

	@include('user.components.script')

</body>

</html>
