




    <!-- join us area start -->
    <section class="join_us">
		<img class="l-image" src="{{url('assets/template/tuser/images/joinus_left_img.png')}}" alt="">

		<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-7">
					<div class="section-heading content-left">
						<h5 class="subtitle">
                        {{ __('home.about_subtitle') }}
						</h5>
						<h2 class="title ">
                        {{ __('home.about_title') }}
						</h2>
						<h6 class="text">
                        {{ __('home.about_text') }}
						</h6>
                        @auth
                            <a href="#" class="mybtn1">{{ __('button.btn_join') }}</a>
                        @endauth
                        @guest
                            <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> {{ __('button.btn_join') }}!</a>
                        @endguest
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- join us area  end -->

	<!-- How play area start -->
	<section class="how-to-play">
		<img class="left-img" src="{{url('assets/template/tuser/images/h-play/left-img.png')}}" alt="">
		<img class="right-img" src="{{url('assets/template/tuser/images/h-play/right-img.png')}}" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h5 class="subtitle">
                        {{ __('home.about_subtitle2') }}
						</h5>
						<h2 class="title ">
                        {{ __('home.about_title2') }}
						</h2>
						<h6 class="text">
                        {{ __('home.about_text2') }}
						</h6>
					</div>
				</div>
			</div>
			<div class="row  justify-content-center">
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="{{url('assets/images/game-controller.png')}}" alt="">
						<h4>Sign Up & Deposit</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="{{url('assets/images/dollar-coin.png')}}" alt="">
						<h4>Compete</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="{{url('assets/images/star-badge.png')}}" alt="">
						<h4>Get Paid</h4>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="{{url('assets/images/star-trophy.png')}}" alt="">
						<h4>Get Paid</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="#" class="mybtn1">Get started Now!</a>
				</div>
			</div>
		</div>
	</section>
	<!-- How play area  end -->
