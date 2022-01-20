    <div class="hero-area hero-area2 hero-text">
		<img class="shape parallax5" src="{{url('assets/template/tuser/images/home/h2-shape.png')}}" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content">
						<div class="content">
							<h3 class="subtitle">
								<!-- PLAY GAMES WIN -->
                                Lambswap Protocol
							</h3>
							<!-- <h4 class="title">
                                {{ __('home.hero_sub-title') }}
							</h4> -->
                            <h4 class="text mb-2">
                            The Next DEXs with Innovative Models with NFT Gaming Metaverse
                            </h4>
							<div class="links">
								<a href="#" class="mybtn1 mb-3">{{ __('button.btn_wallet') }}</a>
								<a href="#" class="mybtn1">Launch App</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!-- Counter Area Start -->
	<section class="counter-section counter-section2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-12">
					<div class="left-info">
						<h5 style="color:#71f737;">Lambswap Airdrop </h5>
						<h3>Round 1</h3>
                        <a href="https://t.me/lambswap" class="mybtn1">Join airdrop!</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="prize-pool">
						<h6 style="color: #fff !important">{{ __('home.hero_prize-pool-h6') }}</h6>
						<h3>$800</h3>
						<div class="timecounter">
							<i class="far fa-clock"></i>
							<div data-countdown="2022/01/01"></div>
						</div>

						<img src="{{url('assets/template/tuser/images/s-box.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Counter Area End -->


    <!-- News Area Start -->
    @include('user.layouts.news')
    <!-- News Area End -->



