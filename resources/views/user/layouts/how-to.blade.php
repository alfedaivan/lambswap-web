<section class="timeline">
    <div class="row">
		<div class="col-lg-12">
			<div class="section-heading">
				<h5 class="subtitle">
                {{ __('home.ido_subtitle') }}
				</h5>
				<h2 class="title ">
					 {{ __('home.ido_title') }}
				</h2>
				<h6 class="text">
                {{ __('home.ido_text') }}

				</h6>
			</div>
		</div>
	</div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <ul class="timeline-box">
                <li class="columns">
                <div class="box">
                    <h3 class="title">{{ __('home.ido_1') }}</h3>
                    <a href="#" class="mybtn1">Join Airdrop!</a>
                </div>
                </li>
                <li class="columns">
                <div class="box">
                    <h3 class="title">{{ __('home.ido_2') }}</h3>
                    <a href="#" class="mybtn1">Get Whitelisted!</a>
                </div>
                </li class="columns">
                <li class="columns">
                <div class="box">
                    <h3 class="title">{{ __('home.ido_3') }}</h3>
                    @auth
                        <!-- <a href="{{route('auth.logout')}}" class="btn btn-danger">Logout</a> -->
                    @endauth
                    @guest
                        <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join Us!</a>
                    @endguest
                </div>
                </li>
                <li class="columns ">
                <div class="box">
                    <h3 class="title">{{ __('home.ido_4') }}</h3>
                    @auth
                        <!-- <a href="{{route('auth.logout')}}" class="btn btn-danger">Logout</a> -->
                    @endauth
                    @guest
                        <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Login!</a>
                    @endguest
                </div>
                </li>
                <li class="columns bottom">
                <div class="box">
                    <h3 class="title">{{ __('home.ido_5') }}</h3>
                    @auth
                        <a href="{{url('/IDO')}}" class="mybtn1">Buy IDO!</a>
                    @endauth
                    @guest
                        <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Buy IDO!</a>
                    @endguest
                </div>
                </li>

            </ul>
        </div>
    </div>
</section>
