    @extends('user.index')

    @section('content')

    <!-- Hero Area Start -->
	@include('user.layouts.hero')
	<!-- Hero Area End -->

    <!-- Hero Area Start -->
	@include('user.layouts.desc-fitur')
	<!-- Hero Area End -->



    <!-- Home Product -->
    @include('user.layouts.home-product')
    <!--  End -->

    <!-- Home parner and investor -->
    @include('user.layouts.partner')
    <!--  End -->

    <!-- Home parner and investor -->
    @include('user.layouts.about')
    <!--  End -->

    <!-- Home how to take a part -->
    @include('user.layouts.how-to')
    <!--  End -->

    @endsection()
