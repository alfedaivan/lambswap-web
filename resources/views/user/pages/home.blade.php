    @extends('user.index')

    @section('content')

    <!-- Hero Area Start -->
	@include('user.layouts.hero')
	<!-- Hero Area End -->

    <!-- About Area Start -->
    @include('user.layouts.about')
	<!-- About Area End -->

    <!-- News Area Start -->
    @include('user.layouts.news')
    <!-- News Area End -->

    @endsection()
