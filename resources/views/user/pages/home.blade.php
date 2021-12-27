    @extends('user.index')

    @section('content')

    <!-- Hero Area Start -->
	@include('user.layouts.hero')
	<!-- Hero Area End -->

    <!-- News Area Start -->
    @include('user.layouts.news')
    <!-- News Area End -->

    <!-- Home Product -->
    @include('user.layouts.home-product')
    <!--  End -->

    <!-- Home parner and investor -->
    @include('user.layouts.partner')
    <!--  End -->

    <!-- Home parner and investor -->
    @include('user.layouts.about')
    <!--  End -->

    @endsection()
