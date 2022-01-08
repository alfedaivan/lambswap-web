<header class="header">
		<div class="overlay"></div>
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html">
								<img src="{{url('assets/images/Lambswap.png')}}" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/')}}">Home</a>
									</li>
                                    <!-- <li class="nav-item">
										<a class="nav-link" href="{{url('/dex')}}">DEX</a>
									</li> -->
									<li class="nav-item">
										<a class="nav-link" href="{{url('/product')}}">NFT</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/game')}}">GameFi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('/bounty')}}">Bounty</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/IDO')}}">IDO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('/help')}}">Help</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="contact.html">Docs</a>
									</li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" style="text-transform: uppercase;" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ app()->getLocale() }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">English</a>
                                            <a class="dropdown-item {{ app()->getLocale() == 'fr' ? 'active' : '' }}" href="{{ route('localization.switch', 'fr') }}">France</a>
                                            <a class="dropdown-item {{ app()->getLocale() == 'vn' ? 'active' : '' }}" href="{{ route('localization.switch', 'vn') }}">Vietnam</a>
                                            <a class="dropdown-item {{ app()->getLocale() == 'de' ? 'active' : '' }}" href="{{ route('localization.switch', 'de') }}">Germany</a>
                                            <a class="dropdown-item {{ app()->getLocale() == 'cn' ? 'active' : '' }}" href="{{ route('localization.switch', 'cn') }}">China</a>
                                        </div>
                                    </li>
								</ul>

                                @auth
                                    <a href="{{route('auth.logout')}}" class="btn btn-danger">logout</a>
                                @endauth
                                @guest
                                    <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Wallet</a>
                                    <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Login</a>
                                @endguest
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
